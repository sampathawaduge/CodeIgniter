<?php

    class Login_controll extends CI_Controller
    {
    	public function __construct()
    	{
    		parent::__construct();
    		$this->load->helper('url');
    	}
    	public function index()
    	{
            $this->load->model('Submission');
            $query=$this->Submission->student_subcategories();
            $sub=$this->Submission->get_submissions();

            if($query && $sub)
            {
                $data['test']=$query;
                $data['sub']=$sub;
                $this->load->view("submit",$data);
            }


    	}
        public function show()
        {
            $comment=$this->input->post('comment');
            $subcat=$this->input->post('subcat');

            $array=[
                'description'=>$comment,
                'subcategory'=>$subcat,
                'user'=>'yo',
                'submission_id'=>4
            ];
            $this->load->model("Submission");
            $this->Submission->insert_submission($array);
        
        }
    	
    }