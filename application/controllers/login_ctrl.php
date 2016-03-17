<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_ctrl extends CI_Controller {

    function index() 
    {
        $this->load->view("admin/layout/header.php");
        $this->load->view('admin/login');
        $this->load->view('admin/layout/footer.php');
    }
    public function login() {
        if ($this->session->userdata('sess_ci_admin_islogged') == 'true') {
            redirect("admin/dashboard");
        } 
        else 
            {
            $data['title'] = "Login";
            $this->load->view("admin/layout/header.php");
            $this->load->view('admin/login',$data);
            $this->load->view('admin/layout/footer.php');
        }
        
    }
    public function dologin() {

    $this->load->model("login_model");
    $login['username'] = $this->input->post('username');
    $login['password'] = $this->input->post('password');
    $result = $this->login_model->isAdmin($login);

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
//            echo $this->session->userdata('sess_ci_admin_msg');

        redirect("dashboard");
        } 
}

    public function logout() {

    $this->load->library('session');
        $this->session->sess_destroy();
        $this->session->set_userdata(array(
            'sess_ci_admin_msg' => " You Have Logged Out successfully... ",
            'sess_ci_admin_msg_type' => 'success'
        ));
        $this->index();

    }
}