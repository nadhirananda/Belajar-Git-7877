<?php
class siswa {
	private $db;
	public function Siswa(){
		$this->db = new DBClass();
		
	}
}public function readAllSiswa(){
		$query = "Select * from siswa s join nationallity n on s.id_nationallity = n.id_nationallity";
		return $this->db->getRows($query);
}
	public function readSiswa($id){
		$query = "Select * from siswa s join nationallity n on s.id_nationallity = n.id_nationallity where id_siswa" .$id;
		return $this->db->getRows ($query);
		
	}
	public function createSiswa ($id_nationallity, $nis, $full_name, $email){
		
	}