<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question_ctrl extends CI_Controller {
//    public function __construct()
//	{
//            parent::__construct();
//            $this->load->library('session');
//            if($this->session->userdata('sess_ci_admin_islogged') != true ) {
//                    redirect('login_ctrl', 'refresh');
//            }
//  	}
	
	public function index()
	{  
            $this->load->view("admin/layout/dashboard_header.php");
            $this->load->view('admin/question/add_question');
            $this->load->view('admin/layout/footer.php');
      	}
                   
        public function  del_question()
        {
        $id = $this->uri->segment(3);
        $this->load->model("question_model");
        $this->question_model->delete_question_id($id);
        $this->question_list();
        }   
	public function question_list()
        {
            $this->load->view("admin/layout/dashboard_header.php");
            $this->load->model("question_model");
            $question['list'] = $this->question_model->question_list();
            $this->load->view('admin/question/question_list',$question);
            $this->load->view('admin/layout/footer.php');

        }
        public function add_question()
        { 
         
             if($this->input->post('submit'))
            {
                $question=array
                (
                'question'  =>$this->input->post('question'),
                'option1'  =>$this->input->post('option1'),
                'option2'  =>$this->input->post('option2'),
                'option3'  =>$this->input->post('option3'),
                'option4'  =>$this->input->post('option4'),
                'answer'  =>$this->input->post('answer'),
                );
            $this->load->model("question_model");
            $result = $this->question_model->add_question($question);
            if (count($result) != 0) {   
                $message['status'] = "Success! Question Added";
            }
            else  {   
                $message['status'] = "Question Not Added";
            }
                $this->load->view("admin/layout/dashboard_header.php");
                $this->load->view('admin/question/add_question',$message);
                $this->load->view('admin/layout/footer.php');
            }
      }
}