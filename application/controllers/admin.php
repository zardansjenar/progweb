<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('createSiswa');
	}

	public function createPelatih()
	{
		$this->load->view('createPelatih');
	}
	public function inputDataPelatih()
	{
		$nip = $this->input->post('nip');
		$pelatih = $this->input->post('pelatih');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tl = $this->input->post('tl');
		$noTelp = $this->input->post('noTelp');
		$email = $this->input->post('email');
		$jk = $this->input->post('jk');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
	}
	public function inputDataSiswa()
	{
		$nisn = $this->input->post('nisn');
		$kelas = $this->input->post('kelas');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tl = $this->input->post('tl');
		$noTelp = $this->input->post('noTelp');
		$email = $this->input->post('email');
		$jk = $this->input->post('jk');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array('nisn' => $nisn,'kelas' => $kelas,'nama' => $nama,'alamat' => $alamat,'tl' => $tl,'no_telp'=> $noTelp,'email'=>$email,'jk'=>$jk,'username'=>$username,'password'=>$password);

		$input = $this->m_admin->insertData('siswa',$data);
		if($input){
			$this->load->view('createSiswa');
		}else{

		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */