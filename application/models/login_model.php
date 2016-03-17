<?php
class Login_model extends CI_Model
{
    public function isAdmin($login)
    {
        $this->load->database();
        $querydb1 = $this->db->select('*')->from("admin")->where('username',$login['username'])->where('password',$login['password']);
        $querydb = $querydb1->get();
        $result = $querydb->result();
        return $result;
    }
}