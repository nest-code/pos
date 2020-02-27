<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('supplier_m');
    }

	public function index()	
	{
		//lempar data
		$data['row'] = $this->supplier_m->get();
        $this->template->load('template','supplier/supplier_data', $data);
	}


	public function add () {
		$supplier = new stdClass();
		$supplier->supplier_id=null;
		$supplier->name=null;
		$supplier->phone=null;
		$supplier->address=null;
		$supplier->description=null;
		$data = array(
				'page'=> 'add',
				'row' => $supplier
		);
		$this->template->load('template','supplier/supplier_form', $data);
	}

	public function del($id)
    {
			// menggunakan method get
			$this->supplier_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				echo "<script>
				alert('Data Berhasil Dihapus');
				</script>";
			}
			echo "<script>window.location='".site_url('supplier')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->supplier_m->get($id);
		if($query->num_rows() >0 ) {
			$supplier = $query->row();
			$data = array(
				'page' =>'edit',
				'row' => $supplier
			);
			$this->template->load('template','supplier/supplier_form', $data);
		}else{

			echo "<script> alert('Data Tidak detemukan');";
			echo "window.location='".site_url('supplier')."';</script>";

		}
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->supplier_m->add($post);
		}

		else if (isset($_POST['edit'])) {
			$this->supplier_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			echo "<script>
			alert('Data Berhasil Disimpan');
			</script>";
		}
		echo "<script>window.location='".site_url('supplier')."';</script>";
	}


}
