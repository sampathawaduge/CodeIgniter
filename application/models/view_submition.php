<?php

	class view_submition extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

	public function view_sub($id)
		{
			$this->db->select('*');
		    $this->db->from('tbl_Submissions');
		    $this->db->where('submission_id',$id);
		    $query = $this->db->get();

			$sub=$query->result_array();
			return $sub;
		}

	public function view_comment($variable)
		{
			$this->db->select('*');
		    $this->db->from('tbl_Commentts');
		    $this->db->where('submission_id',$variable);
		    $query1 = $this->db->get();

			$sub1=$query1->result_array();
			return $sub1;
		}

	public function idea($val)
		{
			if($this->db->insert('tbl_Commentts',$val))
			{
				echo true;
			}
		}
	}
?>