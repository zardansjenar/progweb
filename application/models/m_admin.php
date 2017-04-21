<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	
	}

	public function insertData($table,$data)
	{
		return $this->db->insert($table, $data);
	}

}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */