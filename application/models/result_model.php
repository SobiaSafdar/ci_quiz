<?php
class Result_model extends CI_Model
{
    function __construct() {
        parent::__construct();
      	$this->load->database();
    }
    function user_result()
    {
        $this -> db -> select('*')-> from('result')->join('user', 'user.id = result.user_id', 'left')-> where('user.id',$this->session->userdata('sess_ci_admin_iadminid'));
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)    {
          return $query->result();
        }
        else
        {
          return false;
        }
    }
    function result_list()
    {
        $this -> db -> select('*')-> from('result')->join('user', 'user.id = result.user_id', 'left');
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)    {
          return $query->result();
        }
        else
        {
          return false;
        }
    }
      function delete_result_id($id){
        $this->db->where('id', $id);
        $this->db->delete('result');   
    }
    public function add_result($result)
    {
        $this->db->insert('result', $result); 
        return $this->db->insert_id();
    }
}