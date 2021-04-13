<?php 
	/**
	 * 
	 */
	class m_page extends CI_Model
	{
		
		function get_blog($limit, $start){
            $this->db->select('*');
		    $this->db->join('tb_wisata', 'tb_lokasi.id = tb_wisata.kode_lokasi');
            $query = $this->db->get('tb_lokasi', $limit, $start);
            return $query;
		}
		
		function get_galeri($limit, $start){
            $this->db->select('*');
            $query = $this->db->get('tb_galeri', $limit, $start);
            return $query;
        }
	}


 ?>