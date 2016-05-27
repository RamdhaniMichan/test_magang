<?php
	Class M_crud extends CI_Model{
		
		function m_tambah_act($data,$table){
			$this->db->insert('karyawan',$data);
		}

		function m_hapus($data){
			$this->db->delete('karyawan',$data);
		}

		function m_edit($data){
			$this->db->where($data);
			$edit = $this->db->get('karyawan');
			return $edit->result();
		}

		function m_update($data,$id){
			$this->db->where('id',$id);
			$this->db->update('karyawan',$data);
		}
		
		function view($num, $offset)  {
  
			 $query = $this->db->get('karyawan',$num, $offset);
			 return $query->result();
		  
		 }

	}
?>