<?php 
	
	class Submission extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
		}
		public function insert_submission($val)
		{
			if($this->db->insert('tbl_Submission',$val))
			{
				echo true;
			}
		}
		public function student_subcategories()
		{
			$result=$this->db->get('tbl_Student_Subcat');
			$data=$result->result();
			return $data;
		}

	}
?>