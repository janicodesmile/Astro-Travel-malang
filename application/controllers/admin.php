<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
		$this->load->model('m_kota');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['totwisata'] = $this->db->count_all_results('tb_wisata');
		$data['faq'] = $this->db->count_all_results('tb_faq');
		$data['galeri'] = $this->db->count_all_results('tb_galeri');
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_navbar', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function wisata()
	{
		$data['judul'] = 'Destinasi Wisata';
		$data['user'] = $this->m_admin->join_kota();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_navbar', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/wisata', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function galeri()
	{
		$data['judul'] = 'Galeri Foto';
		$data['user'] = $this->m_admin->galeri();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_navbar', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/galeri', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function hapus($id)
  	{
  		$gambar = 
    	$this->m_admin->delete_data_wisata($id);
    	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil dihapus
				</div>');
    	redirect('admin/wisata');
  	}

	public function detail_mahasiswa()
	{
		echo json_encode($this->model('m_admin')->getDataUbah($_POST['id']));
	}

	public function tambah_wisata()
	{
		$data['judul'] = 'Tambah Destinasi Wisata';
		$data['user'] = $this->db->get('tb_wisata')->result();
		$data['kota'] = $this->m_kota->getAllKota();

		$this->form_validation->set_rules('nama','Nama Destinasi','required|trim',
		[
			'required' => 'Nama Destinasi tidak boleh kosong'
		]);
		$this->form_validation->set_rules('lokasi','lokasi destinasi','required|trim',
		[
			'required' => 'Lokasi Destinasi tidak boleh kosong'
		]);
		$this->form_validation->set_rules('konten','konten destinasi','required|trim',
		[
			'required' => 'konten Destinasi tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false)
		{
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/tambah_wisata', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$nama = $this->input->post('nama');
			$lokasi = $this->input->post('lokasi');
			$konten = $this->input->post('konten');
			$tanggal = $this->input->post('tanggal');
			$dibuat = $this->input->post('dibuat');

			//image
			$upload_img = $_FILES['image']['name'];

			if($upload_img){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '5000';
				$config['upload_path']= './dist/img/wisata/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar',$new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->db->set('judul',$nama);
			$this->db->set('kode_lokasi',$lokasi);
			$this->db->set('konten',$konten);
			$this->db->set('tanggal',$tanggal);
			$this->db->set('dibuat',$dibuat);
			$this->db->insert('tb_wisata');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil ditambah
				</div>');
			redirect('admin/wisata');
		}

	}

	public function tambah_galeri()
	{
		$data['judul'] = 'Tambah Galeri';
		$data['user'] = $this->db->get('tb_galeri')->result();
		$data['galeri'] = $this->m_admin->galeri();

		$this->form_validation->set_rules('nama','Nama galeri','required|trim',
		[
			'required' => 'Judul Galeri tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false)
		{
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/tambah_galeri', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$judul = $this->input->post('nama');
			$tanggal = $this->input->post('tanggal');
			$dibuat = $this->input->post('dibuat');

			//image
			$upload_img = $_FILES['image']['name'];

			if($upload_img){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '5000';
				$config['upload_path']= './dist/img/galeri/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar',$new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->db->set('judul',$judul);
			$this->db->set('tanggal',$tanggal);
			$this->db->set('upload',$dibuat);	
			$this->db->insert('tb_galeri');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil ditambah
				</div>');
			redirect('admin/galeri');
		}

	}

	public function edit_wisata($id)
	{
		$data['judul'] = 'Edit Destinasi Wisata';
		$where = array('id' => $id);
		$data['user'] = $this->m_admin->edit_data($where,'tb_wisata')->result_array();
		$data['anjing'] = $this->m_admin->tampil_data_wisata()->row_array();
		$data['kota'] = $this->m_kota->getAllKota();

		$this->form_validation->set_rules('nama','Nama Destinasi','required|trim',
		[
			'required' => 'Nama Destinasi tidak boleh kosong'
		]);
		$this->form_validation->set_rules('lokasi','lokasi destinasi','required|trim',
		[
			'required' => 'Lokasi Destinasi tidak boleh kosong'
		]);
		$this->form_validation->set_rules('konten','konten destinasi','required|trim',
		[
			'required' => 'konten Destinasi tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false)
		{
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/edit_wisata', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$nama = $this->input->post('nama');
			$lokasi = $this->input->post('lokasi');
			$konten = $this->input->post('konten');
			$tanggal = $this->input->post('tanggal');
			$dibuat = $this->input->post('dibuat');

			//image
			$upload_img = $_FILES['image']['name'];

			if($upload_img){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '5000';
				$config['upload_path']= './dist/img/wisata/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_img = $this->input->post('old_image');
					unlink(FCPATH . 'dist/img/wisata/' . $old_img);
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar',$new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->db->set('judul',$nama);
			$this->db->set('kode_lokasi',$lokasi);
			$this->db->set('konten',$konten);
			$this->db->set('tanggal',$tanggal);
			$this->db->set('dibuat',$dibuat);
			$this->db->where('id',$id);
			$this->db->update('tb_wisata');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil diubah
				</div>');
			redirect('admin/wisata');
		}

	}

	public function edit_galeri($id)
	{
		$data['judul'] = 'Edit Galeri Foto';
		$where = array('id' => $id);
		$data['user'] = $this->m_admin->edit_data($where,'tb_galeri')->result_array();
		$data['user1'] = $this->db->get('tb_galeri')->result();
		$data['galeri'] = $this->m_admin->galeri();

		$this->form_validation->set_rules('nama','Nama Destinasi','required|trim',
		[
			'required' => 'Judul galeri tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false)
		{
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/edit_galeri', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$nama = $this->input->post('nama');
			$tanggal = $this->input->post('tanggal');
			$dibuat = $this->input->post('dibuat');

			//image
			$upload_img = $_FILES['image']['name'];

			if($upload_img){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '5000';
				$config['upload_path']= './dist/img/galeri/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_img = $this->input->post('old_image');
					unlink(FCPATH . 'dist/img/wisata/' . $old_img);
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar',$new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->db->set('judul',$nama);
			$this->db->set('tanggal',$tanggal);
			$this->db->set('upload',$dibuat);
			$this->db->where('id',$id);
			$this->db->update('tb_galeri');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil diubah
				</div>');
			redirect('admin/galeri');
		}

	}

	public function setting()
	{
		$data['judul'] = 'Pengaturan Website';
		$data['user'] = $this->m_admin->tampil_data()->row_array();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_navbar', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/setting', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function edit()
	{
		$data['judul'] = 'edit data web';
		$data['user'] = $this->m_admin->tampil_data()->row_array();

		$this->form_validation->set_rules('nama','Nama Website','required|trim',
		[
			'required' => 'Nama Website tidak boleh kosong'
		]);
		$this->form_validation->set_rules('kata_kunci','Kata Kunci','required|trim',
		[
			'required' => 'kata kunci tidak boleh kosong'
		]);
		$this->form_validation->set_rules('deskripsi','Deskripsi web','required|trim',
		[
			'required' => 'deskripsi web tidak boleh kosong'
		]);
		$this->form_validation->set_rules('alamat','Alamat Travel','required|trim',
		[
			'required' => 'alamat travel tidak boleh kosong'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email',
		[
			'required' => 'email tidak boleh kosong',
			'valid_email' => 'harus format email'
		]);
		$this->form_validation->set_rules('no_telp','Nomor Travel','required|trim',
		[
			'required' => 'Nomor yang bisa dihubungi tidak boleh kosong'
		]);
		$this->form_validation->set_rules('facebook_link','Link Facebook','required|trim',
		[
			'required' => 'Link Facebook tidak boleh kosong'
		]);
		$this->form_validation->set_rules('instagram_link','instagram link','required|trim',
		[
			'required' => 'Link Instagram tidak boleh kosong'
		]);
		$this->form_validation->set_rules('gmaps','google maps','required|trim',
		[
			'required' => 'Titik Google Maps tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false)
		{
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/edit', $data);
			$this->load->view('templates/admin_footer', $data);
		} else{
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$kata_kunci = $this->input->post('kata_kunci');
			$deskripsi = $this->input->post('deskripsi');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');
			$facebook_link = $this->input->post('facebook_link');
			$instagram_link = $this->input->post('instagram_link');
			$gmaps = $this->input->post('gmaps');

			//image
			$upload_img = $_FILES['image']['name'];

			if($upload_img){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '50000';
				$config['upload_path']= './dist/img/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_img = $data['user']['logo'];
					unlink(FCPATH . 'dist/img/' . $old_img);
					$new_image = $this->upload->data('file_name');
					$this->db->set('logo',$new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}


			$this->db->set('nama',$nama);
			$this->db->set('kata_kunci',$kata_kunci);
			$this->db->set('deskripsi',$deskripsi);
			$this->db->set('alamat',$alamat);
			$this->db->set('no_telp',$no_telp);
			$this->db->set('email',$email);
			$this->db->set('facebook_link',$facebook_link);
			$this->db->set('instagram_link',$instagram_link);
			$this->db->set('gmaps',$gmaps);
			$this->db->where('id',$id);
			$this->db->update('tb_setting');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil diperbaharui
				</div>');
			redirect('admin/setting');
		}
	}

	public function ubahpass()
	{
		$data['judul'] = 'Ubah Password Admin';
		$data['user'] = $this->m_admin->tampil_data()->row_array();
		$user = $this->db->get_where('tb_admin',['id' => '1'])->row_array();

		$this->form_validation->set_rules('pass_lama', 'Password Lama', 'required|trim',
		[
			'required' => 'Password Lama tidak boleh kosong'
		]);
		$this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|trim|min_length[6]|matches[pass_baru2]',
		[
			'required' => 'Password Baru tidak boleh kosong',
			'min_length' => 'password minimal 6 karakter',
			'matches' => 'password tidak sama'
		]);
		$this->form_validation->set_rules('pass_baru2', 'Password', 'required|trim|min_length[6]|matches[pass_baru]',
		[
			'matches' => 'password tidak sama',
			'min_length' => 'password pendek',
			'required' => 'tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false){
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/ubahpass', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$pass_lama = $this->input->post('pass_lama');
			$pass_baru = $this->input->post('pass_baru');
			if(!password_verify($pass_lama, $user['password'])){
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  				PASSWORD SALAH
				</div>');
				redirect('admin/ubahpass');
			} else { 
				if ($pass_baru == $pass_lama){
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
  						PASSWORD TIDAK BOLEH SAMA SEPERTI YANG LAMA
						</div>');
					redirect('admin/ubahpass');
				} else {
					//password bener
					$pass_hash = password_hash($pass_baru, PASSWORD_DEFAULT);

					$this->db->set('password', $pass_hash);
					$this->db->where('id', '1');
					$this->db->update('tb_admin');

					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  						PASSWORD BERHASIL DIUBAH, SILAHKAN LOGIN KEMBALI
						</div>');
					redirect('auth');
				}
			}
		}
	}
	public function faq()
	{
		$data['judul'] = 'FAQ Data';
		$data['user'] = $this->m_admin->tampil_faq();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_navbar', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/faq', $data);
		$this->load->view('templates/admin_footer', $data);
	}
	public function tambah_faq()
	{
		$data['judul'] = 'Tambah_FAQ';
		$data['user'] = $this->m_admin->tampil_faq();

		$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim',
		[
			'required' => 'pertanyaan tidak boleh kosong'
		]);
		$this->form_validation->set_rules('jawaban', 'Jawaban', 'required|trim',
		[
			'required' => 'jawaban tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false){
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/tambah_faq', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');

			$this->db->set('pertanyaan',$pertanyaan);
			$this->db->set('jawaban',$jawaban);
			$this->db->set('tanggal',date('d F Y'));
			$this->db->insert('tb_faq');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil ditambah
				</div>');
			redirect('admin/faq');
		}
	}

	public function edit_faq($id)
	{
		$data['judul'] = 'Edit FAQ';
		$where = array('id' => $id);
		$data['user'] = $this->m_admin->edit_data($where,'tb_faq')->result_array();

		$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim',
		[
			'required' => 'pertanyaan tidak boleh kosong'
		]);
		$this->form_validation->set_rules('jawaban', 'Jawaban', 'required|trim',
		[
			'required' => 'jawaban tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false){
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/edit_faq', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$pertanyaan = $this->input->post('pertanyaan');
			$jawaban = $this->input->post('jawaban');

			$this->db->set('pertanyaan',$pertanyaan);
			$this->db->set('jawaban',$jawaban);
			$this->db->set('tanggal',date('d F Y'));
			$this->db->where('id',$id);
			$this->db->update('tb_faq');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil diubah
				</div>');
			redirect('admin/faq');
		}
	}

	public function hapus_faq($id)
  	{
    	$this->m_admin->delete_data_faq($id);
    	$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data berhasil dihapus
				</div>');
    	redirect('admin/faq');
  	}

  	public function supirmobil()
	{
		$data['judul'] = 'Data Mobil & Supir';
		$data['mobil'] = $this->m_admin->mobil();
		$data['supir'] = $this->m_admin->supir();
		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_navbar', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('admin/supirmobil', $data);
		$this->load->view('templates/admin_footer', $data);
	}

	public function tambah_mobil()
	{
		$data['judul'] = 'Tambah Destinasi Wisata';
		$data['user'] = $this->db->get('tb_mobil')->result();

		$this->form_validation->set_rules('jenis','Nama Destinasi','required|trim',
		[
			'required' => 'Jenis Mobil tidak boleh kosong'
		]);
		$this->form_validation->set_rules('plat','lokasi destinasi','required|trim',
		[
			'required' => 'Plat Mobil tidak boleh kosong'
		]);

		if( $this->form_validation->run() == false)
		{
			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_navbar', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('admin/tambah_mobil', $data);
			$this->load->view('templates/admin_footer', $data);
		} else {
			$jenis = $this->input->post('jenis');
			$plat = $this->input->post('plat');
			

			//image
			$upload_img = $_FILES['image']['name'];

			if($upload_img){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '5000';
				$config['upload_path']= './dist/img/mobil/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar',$new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->db->set('jenis',$jenis);
			$this->db->set('plat',$plat);
			$this->db->insert('tb_mobil');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
  				data mobil berhasil ditambah
				</div>');
			redirect('admin/supirmobil');
		}

	}

}