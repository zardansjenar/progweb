<?php 
	class mahasiswa_m extends CI_Model{
		public function insert($value){
			$resault = $this->db->insert('mahasiswa', $value);
			return $resault;
		}
	}
?>