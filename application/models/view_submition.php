<?php

	class view_submition extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

	public function view_sub()
		{
			$this->db->select('*');
		    $this->db->from('tbl_Submission');
		    $this->db->where('submission_id',1);
		    $query = $this->db->get();

			$sub=$query->result_array();
			return $sub;
		}

	public function view_comment()
		{
			$this->db->select('*');
		    $this->db->from('tbl_Comments');
		    $this->db->where('s_id',1);
		    $query1 = $this->db->get();

			$sub1=$query1->result_array();
			return $sub1;
		}

	public function idea($val)
		{
			if($this->db->insert('tbl_Comments',$val))
			{
				echo true;
			}
		}
	}
?>