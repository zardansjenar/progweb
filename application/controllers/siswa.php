<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mahasiswa_m');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$this->load->view('index');
	}
	
	public function insert()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$jurusan = $this->input->post('jurusan');
		
		$value = array(
			'nim' => $nim,
			'nama_mhs' => $nama,
			'email' => $email,
			'jurusan' => $jurusan
			
		);
		
		$insert = $this->mahasiswa_m->insert($value);
		if($insert){
			redirect(base_url('index.php/mahasiswa/view'));
		}else{
			echo"
				<script>
					alert('gagal');
				</script>
			";
		}
	}
	public function view()
		{
			$data['mahasiswa'] = $this->mahasiswa_m->view();
			$this->load->view('table',$data);
		}
		
	public function activity()
	{
		$this->load->view('upload', array('error' => ' ' ));
	}
	
	 public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|zip|rar';
         
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
