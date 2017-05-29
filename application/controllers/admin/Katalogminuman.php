<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalogminuman extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Model_Katalog_Minuman");
	}

	public function index()
	{
        if($this->session->userdata('admin'))
        {
            $this->load->view('Sbadmin');
            $this->load->view('admin/content/Tambah_Katalog_Minuman');
 
        }else
        {
            
            $this->load->view('admin/login');
        }
	}

	public function addKatalog()
	{
		if($this->session->userdata('admin'))
        {
			$target_Path = NULL;
			if ($_FILES['path']['name'] != NULL)
			{
				$target_Path = "assets/images";
				$string = basename( $_FILES['path']['name'] );
		//		$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
			}


			if($target_Path!=NULL)
			{
				$data = array(
					'id_katalog'=> $this->input->post('id_katalog'),
					'nama_minuman'=> $this->input->post('nama_minuman'),
					'harga_minuman'=> $this->input->post('harga_minuman'),
					'PATH'=> $target_Path);
					$query = $this->Model_Katalog_Minuman->insert('Katalog_Minuman', $data);
			}
			
			//print_r($path);die();
			////////////////////////////
			if($query)
			{
				if ($target_Path != NULL) {
					move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
				}
				echo '<script language="javascript">';
				echo 'alert("File berhasil ditambahkan");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}else
			{

				echo '<script language="javascript">';
				echo 'alert("Gagal menyimpan file");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}
			redirect('index.php/admin/Katalogminuman');
		}
	} 

	public function editKatalog($id)
	{
		$this->form_validation->set_rules('nama_minuman', 'nama_minuman', 'required');
		$this->form_validation->set_rules('harga_minuman', 'harga_minuman', 'required');
		//$this->form_validation->set_rules('deskripsi_katalog', 'deskripsi_katalog', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$data['data'] = $this->Model_Katalog_Minuman->get_data_id($id);
			$this->load->view('sbadmin');
        	$this->load->view('admin/content/Editkatalogminuman', $data);
        	$this->load->view('Sbadmin');
		} else {
		// mendapatkan semua data dari view
			//$this->model_artikel->edit_data($id);
			$target_Path = NULL;
			if ($_FILES['path']['name'] != NULL)
			{
				$target_Path = "assets/images/";
				$string = basename( $_FILES['path']['name'] );
		//		$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
			}
			if($target_Path!=NULL)
			{
				$data = array(
					'nama_minuman' => $this->input->post('nama_minuman'),
					'harga_minuman' => $this->input->post('harga_minuman'),
					//'DESKRIPSI_KATALOG' => $this->input->post('deskripsi_katalog'),
					'PATH' => $target_Path
				);
				$query = $this->db->where('id_katalog', $id);
				$query = $this->db->update('Katalog_Minuman', $data);
				if($query)
				{
					if ($target_Path != NULL) {
						move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
					}
					echo '<script language="javascript">';
					echo 'alert("File berhasil ditambahkan");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Gagal menyimpan file");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				redirect('index.php/admin/Katalogminuman/Listkatalogminuman');
			}
		}
	}

	public function listKatalogMinuman()
	{
		if($this->session->userdata('admin'))
		{
			$table = "katalog_minuman";
			$data['data'] = $this->Model_Katalog_Minuman->gettable($table);
			$this->load->view('sbadmin');
	        $this->load->view('admin/content/Listkatalogminuman', $data);
	        $this->load->view('admin/footer/Footer');
    	}
	}

	public function HapusKatalog($id)
	{
		if($this->session->userdata('admin'))
		{
			$this->Model_Katalog_Minuman->delete_data($id);
			redirect('index.php/admin/Katalogminuman/Listkatalogminuman');
		}
	}
}