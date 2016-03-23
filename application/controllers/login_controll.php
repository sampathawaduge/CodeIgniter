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
            if($query)
            {
                $data['test']=$query;
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
                'user'=>'test',
                'submission_id'=>1
            ];
            $this->load->model("Submission");
            $this->Submission->insert_submission($array);
        
        }
    	
    }