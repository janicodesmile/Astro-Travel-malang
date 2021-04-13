<?php 
	/**
	 * 
	 */
	class m_kota extends CI_Model
	{
		
		function getAllKota()
		{
			$query = $this->db->get('tb_lokasi');
			return $query->result_array();
		}
	}


 ?>