<?php 
include '../../config/koneksi.php';
$t1 = $_POST['nik'];
$t3 = $_FILES['foto']['name'];
$tmp_t3 = $_FILES['foto']['tmp_name'];

$tempat = "../../assets/foto/".$t3;

if (move_uploaded_file($tmp_t3, $tempat)) {
	$rubah = mysqli_query($conn,"UPDATE user set foto = '$t3' WHERE nik = '$t1'");
	if ($rubah > 0) {
		echo"
		<script>
		alert('Fhoto Berhasil Di Rubah');
		window.location = '../index.php?menu=3';
		</script>
		";
	
	}
	}else{
		echo"
		<script>
		alert('Fhoto Gagal Di Rubah');
		window.location = '../index.php?menu=3';
		</script>
		";
	}

?>