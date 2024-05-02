<?php 
include '../../config/koneksi.php';

$t1 = $_POST['nik'];
$t2 = $_POST['ket'];
$t3 = $_FILES['foto']['name'];
$tmp_t3 = $_FILES['foto']['tmp_name'];

$tempat = "../../assets/vaksin/".$t3;

if (move_uploaded_file($tmp_t3, $tempat)) {
	$tambah = mysqli_query($conn,"INSERT INTO vaksin VALUES('','$t1','$t2','$t3')");
	if ($tambah > 0) {
		echo"
		<script>
		alert('Sertifikat Berhasil Di Tambahkan');
		window.location = '../index.php?menu=2';
		</script>
		";
	
	}
	}else{
		echo"
		<script>
		alert('Sertifikat Gagal Di Tambahkan');
		</script>
		";
	}
?>