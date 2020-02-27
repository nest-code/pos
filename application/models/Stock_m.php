<?php defined('BASEPATH') OR exit('No direct script access allowed');

class stock_m extends CI_Model{


    public function get_stock_in()
    {
        $query=$this->db->query("SELECT tb_tstock.stock_id, tb_pitem.barcode,tb_pitem.name as item_name, tb_tstock.qty, tb_tstock.date, tb_tstock.detail,
        tb_supplier.name as supplier_name, tb_pitem.item_id
        FROM tb_tstock inner join tb_pitem on tb_pitem.item_id=tb_tstock.item_id left join tb_supplier on tb_supplier.supplier_id=tb_tstock.supplier_id WHERE tb_tstock.type='in' order by tb_tstock.stock_id desc");

        // $this->db->select('*');
        // $this->db->from('tb_tstock');
        // $this->db->join('tb_pitem','tb_tstock.item_id = tb_pitem.item_id');
        // $this->db->join('tb_supplier','tb_tstock.supplier_id = tb_supplier.supplier_id');
        // $this->db->where('type','in');
        // $this->db->order_by('stock_id', 'desc');
        // $query = $this->db->get();

        return $query;
    }

    public function add_stock_in($post)
    {
        $params = [
            'item_id' => $post['item_id'],
            'type' => 'in',
            'detail' => $post['detail'],
            'supplier_id' => $post['supplier'] == '' ? null : $post['supplier'],
            'qty' => $post['qty'],
            'date' => $post['date'],
            'user_id' => $this->session->userdata('userid'),
        ];
        $this->db->insert('tb_tstock', $params);
    }

}