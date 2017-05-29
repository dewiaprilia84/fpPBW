<?php  

class MyController extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->model('Model_Admin');
		$this->load->model('Model_Katalog_Makanan');
		$this->load->model('Model_Katalog_Minuman');
	}
	/*Mulai FrontEnd*/
    function index() 
	{
		$data['err_message'] = ""; //untuk load controller ke view biasanya data butuh dibuat array, didalam array data tersebut ada error message.
		$this->load->view('Index');
    }
	

	function makanan()
	{
		$table = "katalog_makanan";
		$datakatalogmakanan['datakatalogmakanan'] = $this->Model_Katalog_Makanan->gettable($table);
		$this->load->view('Makanan', $datakatalogmakanan);
	}

	function minuman()
	{
		$table = "katalog_minuman";
		$datakatalogminuman['datakatalogminuman'] = $this->Model_Katalog_Minuman->gettable($table);
		$this->load->view('Minuman', $datakatalogminuman);
	}

    function signup()
    {
		$this->load->view('Signup');
	}

		/*Mulai backEnd*/
    function loginadmin()
    {
       		 $this->load->view('Loginadmin');
        
    }
}