<?php

    class comment_controller extends CI_Controller
    {
    	public function __construct()
    	{
    		parent::__construct();
    		$this->load->helper('url');
    	}
    	public function index()
    	{
            $this->load->model('view_submition');
            $sub=$this->view_submition->view_sub();
            $com=$this->view_submition->view_comment();

          //  if($sub && $com)
           // {
                $data['sub']=$sub;
                $data['com']=$com;
                $this->load->view("list",$data);
           // }
    	}

        public function add_idea()
        {
            $idea_txt=$this->input->post('comment');

            $array=[
                'description'=>$idea_txt,
                'user' => "charith11s",
                's_id' => 1,
                'comment_id' => 55,
            ];
            $this->load->model("view_submition");
            $this->view_submition->idea($array);
        
        }
        
    }