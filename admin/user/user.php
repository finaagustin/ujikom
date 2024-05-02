<?php 
$n = $_SESSION['nik'];
$sql = "SELECT * FROM user WHERE nik = '$n'";
$eks = mysqli_query($conn,$sql);
$tmp = mysqli_fetch_assoc($eks);
?>
<div class="container">
	<h3>Data User</h3>
		<form action="user/rubah.php" method="POST" role="form" enctype="multipart/form-data">
			<div class="form-group">
			<label for="">NIK</label>
			<input type="text" class="form-control" name="nik" value="<?php echo $tmp['nik'] ?>" readonly>
		</div>
		<div class="form-group">
			<label for="">NAMA</label>
			<input type="text" class="form-control" id="" value="<?php echo $tmp['nama'] ?>" readonly>
		</div>
		<div class="form-group">
			<label for="">FHOTO</label>
			<br>
			<img src="../assets/foto/<?php echo $tmp['foto'] ?>" width="100">
			<input type="file" name="foto">
		</div>
		<button type="submit" class="btn btn-primary">Rubah</button>
		</form>
</div>