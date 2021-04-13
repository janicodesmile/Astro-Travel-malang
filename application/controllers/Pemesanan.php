<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
		$this->load->model('m_kota');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
    
    public function tambah()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim',
		[
			'required' => 'Nama anda tidak boleh kosong'
		]);
		$this->form_validation->set_rules('tujuan','tujuan','required|trim',
		[
			'required' => 'tujuan anda tidak boleh kosong'
		]);
		$this->form_validation->set_rules('no_hp','Nomor HP','required|trim',
		[
			'required' => 'Nomor hp anda tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat','alamat','required|trim',
		[
			'required' => 'Alamat anda tidak boleh kosong'
        ]);
        if( $this->form_validation->run() == false)
		{
            $data['user'] = $this->m_admin->join_kota();
            $this->load->view('header', $data);
            $this->load->view('pemesanan',$data);
            $this->load->view('footer', $data);
		} else {
            $nama = $this->input->post('nama');
			$tujuan = $this->input->post('tujuan');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
            $tanggal = time();

            $this->db->set('nama',$nama);
			$this->db->set('tujuan',$tujuan);
			$this->db->set('no_hp',$no_hp);
			$this->db->set('alamat',$alamat);
			$this->db->set('tanggal',$tanggal);
			$this->db->insert('tb_pemesan');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil diterima, harap menunggu pesan dari kami untuk informasi penjemputan berikutnya
				</div>');
			redirect('inde/testimoni');
        }
	}
}
