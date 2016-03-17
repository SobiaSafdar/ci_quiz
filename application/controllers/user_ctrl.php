<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_ctrl extends CI_Controller {

    function index() 
    {
        $this->load->view("user/layout/header.php");
        $this->load->view('user/login');
        $this->load->view('user/layout/footer.php');
    }
    function registration() 
    {
        $this->load->view("user/layout/header.php");
        $this->load->view('user/registration');
        $this->load->view('user/layout/footer.php');
    }
    function adduser() 
    {
        $this->load->model("user_login_model");
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $result = $this->user_login_model->add($data);
        $this->index();
    }
    public function login() {
        if ($this->session->userdata('sess_ci_user_islogged') == 'true') {
            redirect("user/dashboard");
        } 
        else 
            {
            $data['title'] = "Login";
            $this->load->view("user/layout/header.php");
            $this->load->view('user/login',$data);
            $this->load->view('user/layout/footer.php');
        }
        
    }
     public function dologin() {

    $this->load->model("user_login_model");
    $login['username'] = $this->input->post('username');
    $login['password'] = $this->input->post('password');
    $result = $this->user_login_model->isuser($login);

    if (count($result) != 0) 
        {                
        $this->session->set_userdata(array(
            'sess_ci_admin_iadminid' => $result['0']->id,
            'sess_ci_admin_vName' => $result['0']->username,
            'sess_ci_admin_vEmailaddress' => $result['0']->password,
            'sess_ci_admin_role' => 1,
            'sess_ci_admin_lock' => false,
            'sess_ci_admin_msg' => " Login Successfully. ",
            'sess_ci_admin_msg_type' => 'success',
            'sess_ci_admin_islogged' => true
        ));
//        $this->index();
        redirect("dashboard/user");
        } 
}


    public function logout() {

    $this->load->library('session');
        $this->session->sess_destroy();
        $this->session->set_userdata(array(
            'sess_ci_user_msg' => " You Have Logged Out successfully... ",
            'sess_ci_user_msg_type' => 'success'
        ));
        $this->index();

    }
}