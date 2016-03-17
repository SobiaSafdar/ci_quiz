<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
	{
            parent::__construct();
//            $this->output->enable_profiler(TRUE);
          
            if($this->session->userdata('sess_ci_admin_islogged') == false ) {
                    redirect('login_ctrl', 'refresh');
            }  
  	}
	
	public function index()
	{  
            $this->load->view("admin/layout/dashboard_header.php");
            $this->load->view('admin/dashboard');
            $this->load->view('admin/layout/footer.php');
            
	}
	public function user()
	{  
//            $data['message']  = "";
            $this->load->view("user/layout/dashboard_header.php");
            $this->load->view('user/dashboard');
            $this->load->view('user/layout/footer.php');
            
	}
	
	
	
	  
}