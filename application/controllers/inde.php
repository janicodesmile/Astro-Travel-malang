<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inde extends CI_Controller 
{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
		$this->load->model('m_kota');
    $this->load->model('m_page');
    $this->load->model('M_harga');
    $this->load->model('M_blog');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('form_validation');
	}
	public function index()
	{
    $data['user'] = $this->m_admin->join_kota();
    $data['set'] = $this->m_admin->tampil_data()->row_array();
		$this->load->view('header', $data);
		$this->load->view('tentang', $data);
		$this->load->view('footer', $data);
	}

	public function testimoni()
	{
    $data['user'] = $this->m_admin->join_kota();
    $data['set'] = $this->m_admin->tampil_data()->row_array();
    $this->load->view('header', $data);
    $this->load->view('pemesanan');
    $this->load->view('footer', $data);
	}


	public function blogspot()
	{
		//konfigurasi pagination
		$config['base_url'] = site_url('inde/blogspot'); //site url
        $config['total_rows'] = $this->db->count_all('tb_wisata'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_page->get_blog($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        $data['set'] = $this->m_admin->tampil_data()->row_array();
		$data['user'] = $this->m_admin->join_kota();
		$this->load->view('header', $data);
		$this->load->view('blogspot', $data);
		$this->load->view('footer', $data);
	}

	public function tentang()
	{
    $data['set'] = $this->m_admin->tampil_data()->row_array();
		$data['user'] = $this->m_admin->join_kota();
		$this->load->view('header', $data);
		$this->load->view('tentang', $data);
		$this->load->view('footer', $data);
	}

	public function galeri()
	{
		$config['base_url'] = site_url('inde/galeri'); //site url
        $config['total_rows'] = $this->db->count_all('tb_galeri'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_page->get_galeri($config["per_page"], $data['page'])->result();
        $data['pagination'] = $this->pagination->create_links();
        $data['set'] = $this->m_admin->tampil_data()->row_array();
		$data['user'] = $this->m_admin->galeri();
		$this->load->view('header', $data);
		$this->load->view('galeri', $data);
		$this->load->view('footer', $data);
	}

	public function tujuan()
	{
    $data['set'] = $this->m_admin->tampil_data()->row_array();
		$data['user'] = $this->M_harga->get_harga();
		$this->load->view('header', $data);
		$this->load->view('tujuan', $data);
		$this->load->view('footer', $data);
	}

	public function blog()
	{
    $id = $this->input->get('blog');
    $data['set'] = $this->m_admin->tampil_data()->row_array();
    $data['user'] = $this->m_admin->join_kota_blog($id);
    $data['data'] = $this->m_page->get_blog(5, 0);
    $data['blog'] = $this->M_blog->getKomen($id);
    $this->db->select('*');
    $this->db->from('tb_komen');
    $this->db->where('id_wisata', $id);
    $data['num_results'] = $this->db->count_all_results();
    $this->load->view('blog',$data);
    $this->load->view('footer', $data);
	}
}