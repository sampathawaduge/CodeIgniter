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
    		$this->load->view("landing_page");

    	}
    	public function show()
    	{
    		
    	}
    }