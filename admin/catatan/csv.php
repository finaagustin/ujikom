<?php 
//panggil koneksi
session_start();
include '../../config/koneksi.php';

//memanggil data dari database
$n = $_SESSION['nik'];
$sql ="SELECT * FROM perjalanan WHERE nik = '$n'";
$eks = mysqli_query($conn,$sql);
$tmp = mysqli_num_rows($eks);

if ($tmp> 0) {
	$pemisah = ",";
	$nama = "dataperjalanan".".csv";

	// membuat file
	$f = fopen('php://memory','w');

	//tampilan header table
	$header = array('NIK','SUHU');
	fputcsv($f, $header,$pemisah);

	//load data dari database
	while ($tmp2 = mysqli_fetch_assoc($eks)) {
		$baris = array($tmp2['nik'],$tmp2['suhu']);
		fputcsv($f, $baris,$pemisah);
	}
	fseek($f, 0);

	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="'.$nama.'";');

	fpassthru($f);
}
?>