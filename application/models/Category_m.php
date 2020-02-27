<?php defined('BASEPATH') OR exit('No direct script access allowed');

class category_m extends CI_Model{

    public function get($id = null)
    {
            $this->db->from('tb_pcategory');
            if($id !=null) {
            $this->db->where('category_id', $id);
            }
            $query = $this->db->get();
            return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['category_name'],
        ];
        $this->db->insert('tb_pcategory', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['category_name'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('category_id', $post['id']);
        $this->db->update('tb_pcategory', $params);
    }

    
    public function del($id)
    {
        $this->db->where('category_id',$id);
        $this->db->delete('tb_pcategory');
    }

}