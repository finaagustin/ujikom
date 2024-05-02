<?php 
include 'config/koneksi.php';

$t1 = $_POST['nik'];
$t2 = $_POST['nama'];
$t3 = $_FILES['foto']['name'];
$tmp_t3 = $_FILES['foto']['tmp_name'];

$tempat = "assets/foto/".$t3;

$sql = "SELECT * FROM user WHERE nik = '$t1'";
$eks = mysqli_query($conn,$sql);
$pecah = mysqli_fetch_assoc($eks);
if ($pecah > 0) {
	echo"
	<script>
	alert('Nik Sudah Di Gunakan');
	window.location = 'register.php';
	</script>
	";

if (move_uploaded_file($tmp_t3, $tempat)) {
	$tambah = mysqli_query($conn,"INSERT INTO user VALUES('','$t1','$t2','$t3')");
	if ($tambah > 0) {
		echo"
		<script>
		alert('Data Berhasil Di Tambahkan');
		window.location = 'index.php';
		</script>
		";
	
	}
	}else{
		echo"
		<script>
		alert('Data Gagal Di Tambahkan');
		window.location = 'register.php';
		</script>
		";
	}
}else{
		echo"
		<script>
		alert('Data Gagal Di Tambahkan');
		window.location = 'register.php';
		</script>
		";
	}
?>