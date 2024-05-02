<body onload="print()">
	<?php 
	include '../../config/koneksi.php';
	session_start(); 
	?>
	<h3>Catatan Perjalanan Dengan Nik : <?= $_SESSION['nik'] ?></h3>
	<table border="3">
				<thead>
					<tr>
						<th>Keterangan</th>
						<th>Fhoto</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$n = $_SESSION['nik'];
					$sql = "SELECT * FROM vaksin WHERE nik='$n'";
					$eks = mysqli_query($conn,$sql);
					while ($tmp = mysqli_fetch_array($eks)) {
						
					
					?>
					<tr>
						<td><?php echo $tmp['keterangan'] ?></td>
						<td><img src="../../assets/vaksin/<?php echo $tmp['foto'] ?>" width="100"></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
</body>