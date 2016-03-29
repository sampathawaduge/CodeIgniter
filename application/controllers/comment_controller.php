<?php

    class comment_controller extends CI_Controller
    {
        

    	public function __construct()
    	{
    		parent::__construct();
    		$this->load->helper('url');
            $this->load->library('session');
            
    	}
    	
        
        public function add_idea()
        {
            $idea_txt=$this->input->post('comment');
            $submissionid=$this->session->userdata('subbid');
            
            $array=[
                'description'=>$idea_txt,
                'comment_user' => "charith11s",
                'submission_id' =>$submissionid
            ];
            $this->load->model("view_submition");
            $this->view_submition->idea($array);
            


        
        }
        public function show()
        {
            $sub_id=$this->uri->segment(3);

            $this->session->set_userdata(array('subbid'=>$sub_id));
            
            $this->load->model('view_submition');
            
            $sub=$this->view_submition->view_sub($sub_id);
            
            $com=$this->view_submition->view_comment($sub_id);

            $data['sub']=$sub;
            $data['com']=$com;
            $this->load->view("list",$data);
        }

        
        
    }