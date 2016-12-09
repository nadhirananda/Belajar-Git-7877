<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$id = $_GET['a'];

if(!is_numeric($id)){
		exit('Access Forbiden');
}
$siswa = new Siswa();
$data = $siswa->readSiswa($id);

$nation = new Nationality();
$data_nation = $nation->readAllNationality();

if(empty($data)) {
	exit('siswa is not found');
	
}
$dt = $data[0];

?>
<h1> Edit Data Siswa</h1>
<form action="editsiswa.php" method="post">
	NIS:<br />
	<input type="text" value="<?php echo echo $dt['id_siswa']?>"
		name="in_nis" readonly="true"><br />
	Nama Lengkap:<br />
	<input type="text" name="in_name" value="<?php echo echo $dt['full_name']?>"><br />
	Email:<br />
	<input type="text" name="in_email" value="<?php echo echo $dt['email']?>"><br />
	Kewarganegaraan:<br />
	<select name="in_natoin">
		<option value=""> --pilih negara--</option>
		
	</select<<br />
	<input type="submit" name="kirim" value="simpan">
</form>