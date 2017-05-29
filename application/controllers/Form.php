<?php  

class Form extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
    $this->load->model('Model_Regis');
	}
function index(){
		$this->load->view('Register');
	}
	

	function submit()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('country', 'country', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('phone_number', 'phone_number', 'required');

		if($this->form_validation->run() != FALSE)
		{
			$this->session->set_flashdata('message', 'Registrasi berhasil dan sudah terdaftar');
			$this->tambah();
			//$this->load->view('loginuser');
			redirect('index/MyController');
		}else
		{
			$this->load->view('Register');
		}
	}
	function tambah(){
			$name 		= $this->input->post('name');
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');
			$address	= $this->input->post('address');
			$country	= $this->input->post('country');
			$city		= $this->input->post('city');
			$phone_number	= $this->input->post('phone_number');

			$data=array(
				'name' => $name,
				'username' => $username,
				'password' => sha1($password),
				'address' => $address,
				'country' => $country,
				'city' => $city,
				'phone_number' => $phone_number,

				);
		
			$this->Model_Regis->input_data('user', $data);
			redirect('index.php/MyController/Index');
		}
	}