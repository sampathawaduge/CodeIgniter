<?php

    class Login_controll extends CI_Controller
    {
    	public function __construct()
    	{
    		parent::__construct();
    		$this->load->helper('url');
            $this->load->library('session');

    	}
    	public function index()
    	{
            if(empty($this->session->userdata['username']))
            {
                redirect(site_url('login'));
            }else {
                $this->load->model('Submission');

                $query = $this->Submission->student_subcategories($this->session->userdata['username']);
                $sub = $this->Submission->get_submissions();
                $data['test'] = $query;
                $data['sub'] = $sub;
                $this->load->view("submit", $data);
            }
    	}
        public function show()
        {
            $comment=$this->input->post('comment');
            $subcat=$this->input->post('subcat');


            $array=[
                'description'=>$comment,
                'submission_category'=>$subcat,
                'submission_user'=>$this->session->userdata['username']
            ];
            $this->load->model("Submission");
            $this->Submission->insert_submission($array);

        }
        

    	
    }