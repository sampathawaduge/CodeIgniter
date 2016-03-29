<?php

class register_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view("register");
    }

    public function register()
    {
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $category=$this->input->post('category');

        $array=[
            'name'=>$username,
            'password' => $password,
            'email' => $email,
            'category' => $category,
        ];
        $this->load->model("register_model");
        $this->register_model->add_db($array);

    }

}