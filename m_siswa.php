<?php
class siswa {
	private $db;
	public function Siswa(){
		$this->db = new DBClass();
		
	}
}public function readAllSiswa(){
		$query = "Select * from siswa s join nationality n on s.id_nationality = n.id_nationality";
		return $this->db->getRows($query);
}
	public function readSiswa($id){
		$query = "Select * from siswa s join nationality n on s.id_nationality = n.id_nationality where id_siswa" .$id;
		return $this->db->getRows ($query);
		
	}
		
	}

?>