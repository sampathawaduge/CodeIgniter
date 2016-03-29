<?php
	class User_profile extends CI_Controller 
	{

		public function __construct()
    	{
    		parent::__construct();
    		$this->load->helper('url');
    
    	}

		public function index()
		{

			$user='ud';
			$this->load->model('userprof');
           
            $subs=$this->userprof->getSubmissions($user);
           
            $data['subs']=$subs;
            $data['user']=$user;

            $details=$this->userprof->getUserDetails($user);
           
            $data['details']=$details;

            $this->load->view("userprofile",$data);



		
		}

		public function show()
        {

        }

	}