<?php 
	/**
	 * 
	 */
	class M_blog extends CI_Model
	{
		
		function getKomen($id)
		{
			$this->db->select('*');
            $this->db->from('tb_komen');
            $this->db->join('tb_wisata', 'tb_komen.id_wisata = tb_wisata.id');
            $this->db->where('tb_komen.id_wisata', $id);

            $query = $this->db->get();
            return $query->result();
        }
        function totalKomen($id){
            $this->db->select('*');
            $this->db->from('tb_komen');
            $this->db->where('id_wisata', $id);
            $num_results = $this->db->count_all_results();
        }
	}


 ?>