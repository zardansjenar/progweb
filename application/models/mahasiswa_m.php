<?php 
	class mahasiswa_m extends CI_Model{
		public function __construct(){
		parent::__construct();
	}
		
		public function insert($value){
			$resault = $this->db->insert('mahasiswa', $value);
			return $resault;
		}
		public function view()
		{
			$this->db->select('*');
			$this->db->from('mahasiswa');
			$data = $this->db->get();
			return $data->result();
		}
	}
?>