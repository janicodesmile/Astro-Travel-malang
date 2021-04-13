<?php 
	/**
	 * 
	 */
	class M_Harga extends CI_Model
	{
		
		function get_harga(){
            $this->db->select('*');
		    $this->db->join('tb_dari', 'tb_harga.id_dari = tb_dari.id_dari');
            $query = $this->db->get('tb_harga');
            return $query->result();
		}
	}


 ?>