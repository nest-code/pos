<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('costumer_m');
    }

	public function index()	
	{
		//lempar data
		$data['row'] = $this->costumer_m->get();
        $this->template->load('template','costumer/costumer_data', $data);
	}


	public function add () {
		$costumer = new stdClass();
		$costumer->costumer_id=null;
        $costumer->name=null;
        $costumer->gender=null;
		$costumer->phone=null;
		$costumer->address=null;
		$data = array(
				'page'=> 'add',
				'row' => $costumer
		);
		$this->template->load('template','costumer/costumer_form', $data);
	}

	public function del($id)
    {
			// menggunakan method get
			$this->costumer_m->del($id);
			if ($this->db->affected_rows() > 0 ){
				echo "<script>
				alert('Data Berhasil Dihapus');
				</script>";
			}
			echo "<script>window.location='".site_url('costumer')."';</script>";
	}

	public function edit($id) 
	{
		$query = $this->costumer_m->get($id);
		if($query->num_rows() >0 ) {
			$costumer = $query->row();
			$data = array(
				'page' =>'edit',
				'row' => $costumer
			);
			$this->template->load('template','costumer/costumer_form', $data);
		}else{

			echo "<script> alert('Data Tidak detemukan');";
			echo "window.location='".site_url('costumer')."';</script>";

		}
	}
	
	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($_POST['add'])) {
			$this->costumer_m->add($post);
		}

		else if (isset($_POST['edit'])) {
			$this->costumer_m->edit($post);
		}

		if ($this->db->affected_rows() > 0 ){
			echo "<script>
			alert('Data Berhasil Disimpan');
			</script>";
		}
		echo "<script>window.location='".site_url('costumer')."';</script>";
	}


}
