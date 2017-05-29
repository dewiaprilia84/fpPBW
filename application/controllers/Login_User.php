<?php

class Login_User extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Model_Login');


	}

	function index(){
		$this->load->view('Loginuser');
	}

	function loginuser()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => sha1($password)
			);
		$cek = $this->Model_Login->user_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login_user"
				);

			$this->session->set_userdata($data_session);

			redirect("index.php/MyController/Index");
			//$this->load->view('index');

		}else{
			//echo "Username dan password salah !";
			$this->session->set_flashdata('message', 'Username or password salah');
			redirect('index.php/Login_User');
		}
	}

	function logout(){
		$this->session->destroy();
		redirect(base_url('Login_User'));
	}
}
