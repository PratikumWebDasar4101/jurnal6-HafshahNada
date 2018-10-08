<?php
include_once 'db.php';

if (isset($_POST['submit'])){
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$kl=$_POST['kelas'];
	$jk=$_POST['jk'];
	$Hobi = $_POST['Hobi'];
	$fk = $_POST['fk'];
	$Alamat = $_POST['Alamat'];

	$query = "UPDATE Mahasiswa Set nama='$nama', nim='$nim', kl='$kl', jk='$jk',Hobi='$Hobi',fk='fk',Alamat='$Alamat',Where id ='$nim'";
	$query_succes = msqli_query($conn,$query);
	if (@query_succes){
		header("location: list.php");

	}else{
		echo mysql_error($conn);
		echo "<a href='Edit.php'>Kembali</a>";
	}
}