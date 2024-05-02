<?php 
include '../../config/koneksi.php';

$t1 = $_POST['nik'];
$t2 = $_POST['waktu'];
$t3 = $_POST['lokasi'];
$t4 = $_POST['suhu'];

$eksekusi = mysqli_query($conn,"INSERT INTO perjalanan VALUES('','$t1',now(),'$t2','$t3','$t4')");
if ($eksekusi > 0) {
		echo"
		<script>
		alert('Data Berhasil Di Tambahkan');
		window.location = '../?menu=1';
		</script>
		";
	}else{
		echo"
		<script>
		alert('Data Gagal Di Tambahkan');
		window.location = '../?menu=1';
		</script>
		";
	}
?>