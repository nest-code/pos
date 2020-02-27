<?php defined('BASEPATH') OR exit('No direct script access allowed');

class unit_m extends CI_Model{

    public function get($id = null)
    {
            $this->db->from('tb_punit');
            if($id !=null) {
            $this->db->where('unit_id', $id);
            }
            $query = $this->db->get();
            return $query;
    }

    public function add($post)
    {
        $params = [
            'name' => $post['unit_name'],
        ];
        $this->db->insert('tb_punit', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['unit_name'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('unit_id', $post['id']);
        $this->db->update('tb_punit', $params);
    }

    
    public function del($id)
    {
        $this->db->where('unit_id',$id);
        $this->db->delete('tb_punit');
    }

}