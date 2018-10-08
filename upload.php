<?php
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$kl=$_POST['kelas'];
	$jk=$_POST['jk'];
	$Hobi = $_POST['Hobi'];
	$fk = $_POST['fk'];
	$Alamat = $_POST['Alamat'];

	echo "<br><br> Nama 		 : $nama";
	echo "<br><br> NIM           : $nim";
	echo "<br><br> Kelas 		 : $kl";
	echo "<br><br> Jenis Kelamin : $jk";
	echo "<br><br> Hobi 		 : $Hobi";
	echo "<br><br> Fakultas 	 : $fk";

}

?>