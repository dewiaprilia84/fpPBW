<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("model_order");
	}


	public function index()
	{
        if($this->session->userdata('order'))
        {
            $this->load->view('sbadmin');
            $this->load->view('admin/content/orderan');
           
        }else
        {
            
            $this->load->view('admin/login');
        }
	}

	public function order()
	{
        if($this->session->userdata('order'))
        {
            $this->load->view('sbadmin');
            $data['data'] = $this->model_order->getTable_order("order", "id_order");
            $this->load->view('admin/content/orderan', $data);
           
        }else
        {
            $this->load->view('admin/login');
        }
	}

	public function orderan()
	{
		if($this->session->userdata('order'))
		{
			$this->form_validation->set_rules('tanggal_pemesanan', 'tanggal_pemesanan', 'required');
			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('isi_orderan', 'isi_orderan', 'required');
			$this->form_validation->set_rules('alamat_customer', 'alamat_customer', 'required|Valid_alamat');
			$this->form_validation->set_rules('no_telp', 'no_telp', 'required');
		
		
		
		

			if($this->form_validation->run() === FALSE)
			{
				echo '<script language="javascript">';
				echo 'alert("Gagal mengirim pesanan. Ada field yang kosong / Isi alamat dengan benar");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}else
			{
				$nama				= $this->input->post('nama');
				$tanggal_pemesanan	= $this->input->post('tanggal_pemesanan');
				$isi_orderan			= $this->input->post('isi_orderan');
				$alamat_customer		= $this->input->post('alamat_customer');
				$no_telp		= $this->input->post('no_telp');
				$data=array(
				'tanggal_pemesanan' => date('Y-m-d',now()),
				'nama' => $nama,
				'isi_orderan' => $isi_orderan,
				'alamat_customer' => $alamat_customer,
				'no_telp' => no_telp,
				);
				
				$res=$this->model_order->insert('order', $data);
				echo '<script language="javascript">';
				echo 'alert("Pesan berhasil dikirim");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}
			redirect('index.php/order/orderan');
		}
	}

	public function delete($id)
	{
		if($this->session->userdata('order'))
		{
		$this->model_order->delete_data($id);
		redirect('index.php/admin/order/orderan');
		}
	}
}