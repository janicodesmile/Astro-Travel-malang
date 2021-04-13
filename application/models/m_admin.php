<?php 

	class m_admin extends CI_Model{

		function tampil_data(){
			return $this->db->get('tb_setting');
		}

		function tampil_data_wisata(){
			return $this->db->get('tb_wisata');
		}

		function edit_data($where,$table){		
			return $this->db->get_where($table,$where);
		}


		public function getDataUbah($id)
		{
			return $hsl = $this->db->get_where('tb_wisata',['id' => $id])->affected_rows();
		}

		public function join_kota()
		{
            $this->db->select('*');
		    $this->db->join('tb_wisata', 'tb_lokasi.id = tb_wisata.kode_lokasi');
		    $this->db->from('tb_lokasi');
		    $query = $this->db->get();
		    return $query->result();
		}

		public function join_kota_blog($id)
		{
			$this->db->select('*');
			$this->db->from('tb_wisata');
			$this->db->join('tb_lokasi', 'tb_lokasi.id = tb_wisata.kode_lokasi');
			$this->db->where('tb_wisata.id', $id);
			//$this->db->from('tb_lokasi');
		    $query = $this->db->get();
		    return $query->result();
		}

		public function supir()
		{
            $this->db->select('*');
		    $this->db->from('tb_supir');
		    $query = $this->db->get();
		    return $query->result();
		}
		public function mobil()
		{
            $this->db->select('*');
		    $this->db->from('tb_mobil');
		    $query = $this->db->get();
		    return $query->result();
		}

		public function tampil_faq()
		{
            $this->db->select('*');
		    $this->db->from('tb_faq');
		    $query = $this->db->get();
		    return $query->result();
		}

		public function galeri()
		{
            $this->db->select('*');
		    $this->db->from('tb_galeri');
		    $query = $this->db->get();
		    return $query->result();
		}

		public function delete_data_wisata($id)
	    {
	        $this->db->delete('tb_wisata', ['id' => $id]);
	    }

	    public function delete_data_faq($id)
	    {
	        $this->db->delete('tb_faq', ['id' => $id]);
		}
		
		function totalwisata(){
			$query = $this->db->count_all('tb_wisata');
			// $this->db->select('count(*)');
			// $this->db->from('tb_wisata');
			// $query = $this->db->get();
			//  echo $query->num_rows();
			// $this->db->select_count('id');
			//    $query = $this->db->get('tb_wisata');
			return $query->row();
		}
	}
 ?>