<?php
class User_login_model extends CI_Model
{
     public function add($data)
    {
         $this->load->database();
        $this->db->insert('user', $data); 
        return $this->db->insert_id();
    }
    public function isuser($login)
    {    $this->load->database();
     
        $querydb1 = $this->db->select('*')->from("user")->where('username',$login['username'])->where('password',$login['password']);
        $querydb = $querydb1->get();
        $result = $querydb->result();
        return $result;
    }
}