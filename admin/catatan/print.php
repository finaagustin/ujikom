<body onload="print()">
	<?php 
	include '../../config/koneksi.php';
	session_start(); 
	?>
	<h3>Catatan Perjalanan Dengan Nik : <?= $_SESSION['nik'] ?></h3>
	<table border="3">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>Waktu</th>
						<th>Lokasi</th>
						<th>Suhu Tubuh</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$n = $_SESSION['nik'];
					$sql = "SELECT * FROM perjalanan WHERE nik='$n'";
					$eks = mysqli_query($conn,$sql);
					while ($tmp = mysqli_fetch_array($eks)) {
						
					
					?>
					<tr>
						<td><?php echo $tmp['tanggal'] ?></td>
						<td><?php echo $tmp['waktu'] ?></td>
						<td><?php echo $tmp['lokasi'] ?></td>
						<td><?php echo $tmp['suhu'] ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
</body>