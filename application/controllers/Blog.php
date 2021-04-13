<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
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
		$this->form_validation->set_rules('email','Email','required|trim',
		[
			'required' => 'email anda tidak boleh kosong'
		]);
		$this->form_validation->set_rules('komen','komentar','required|trim',
		[
			'required' => 'Komentar anda tidak boleh kosong'
        ]);
        if( $this->form_validation->run() == false)
		{
            $data['set'] = $this->m_admin->tampil_data()->row_array();
            $data['user'] = $this->m_admin->join_kota_blog($id);
            $data['data'] = $this->m_page->get_blog(5, 0);
            $this->load->view('blog',$data);
            $this->load->view('footer', $data);
		} else {
            $id = $this->input->post('id_wisata');
            $nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$komentar = $this->input->post('komen');
            $tanggal = date("Y-m-d H:i:s");

            $this->db->set('nama',$nama);
			$this->db->set('id_wisata',$id);
			$this->db->set('email',$email);
			$this->db->set('komentar',$komentar);
			$this->db->set('tanggal',$tanggal);
			$this->db->insert('tb_komen');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				Berhasil Coment
				</div>');
			redirect('inde/blog?blog='.$id);
        }
	}
}
