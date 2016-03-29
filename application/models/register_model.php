<?php

class register_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function add_db($val)
    {
        if($this->db->insert('tbl_User',$val))
        {
            echo true;
        }
    }
}
?>