<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalogmakanan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Model_Katalog_Makanan");
	}

	public function index()
	{
        if($this->session->userdata('admin'))
        {
            $this->load->view('Sbadmin');
            $this->load->view('admin/content/Tambah_Katalog_Makanan');
         
        }else
        {
            
            $this->load->view('admin/Login');
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
					'nama_makanan'=> $this->input->post('nama_makanan'),
					'harga_makanan'=> $this->input->post('harga_makanan'),
					'PATH'=> $target_Path);
					$query = $this->Model_Katalog_Makanan->insert('Katalog_Makanan', $data);
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
			redirect('index.php/admin/Katalogmakanan');
		}
	} 

	public function editKatalog($id)
	{
		$this->form_validation->set_rules('nama_makanan', 'nama_makanan', 'required');
		$this->form_validation->set_rules('harga_makanan', 'harga_makanan', 'required');
		//$this->form_validation->set_rules('deskripsi_katalog', 'deskripsi_katalog', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$data['data'] = $this->Model_Katalog_Makanan->get_data_id($id);
			$this->load->view('sbadmin');
        	$this->load->view('admin/content/Editkatalogmakanan', $data);
        	$this->load->view('admin/footer/Footer');
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
					'nama_makanan' => $this->input->post('nama_makanan'),
					'harga_makanan' => $this->input->post('harga_makanan'),
					//'DESKRIPSI_KATALOG' => $this->input->post('deskripsi_katalog'),
					'PATH' => $target_Path
				);
				$query = $this->db->where('id_katalog', $id);
				$query = $this->db->update('Katalog_Makanan', $data);
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
				redirect('index.php/admin/Katalogmakanan/Listkatalogmakanan');
				//index.php/admin/katalog/listKatalog
			}
		}
	}

	public function listKatalogMakanan()
	{
		if($this->session->userdata('admin'))
		{
			$table = "katalog_makanan";
			$data['data'] = $this->Model_Katalog_Makanan->gettable($table);
			$this->load->view('sbadmin');
	        $this->load->view('admin/content/listkatalogmakanan', $data);
	        $this->load->view('admin/footer/footer');
    	}
	}

	public function hapusKatalog($id)
	{
		if($this->session->userdata('admin'))
		{
			$this->Model_Katalog_Makanan->delete_data($id);
			redirect('index.php/admin/katalogmakanan/listkatalogmakanan');
		}
	}
}