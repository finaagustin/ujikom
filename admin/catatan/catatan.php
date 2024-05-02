<div class="container">
	<br>
	<div class="box">
		<div class="box-header">
			<h3>Catatan Perjalanan</h3>
			<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i>Isi Catatan Perjalanan</a>
			<a href="catatan/print.php" class="btn btn-info"><i class="fa fa-print"></i> </a>
			<a href="catatan/csv.php" class="btn btn-info"><i class="fa fa-file"></i> </a>
		</div>
		<div class="box-body">
			<table id="example" class="table table-hover">
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
		</div>
	</div>
</div>

<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<form action="catatan/simpan.php" method="POST" role="form">
					<div class="form-group">
						<label for="">WAKTU</label>
						<input type="hidden" name="nik" value="<?php echo $_SESSION['nik'] ?>" >
						<input type="time" class="form-control" name="waktu">
					</div>
					<div class="form-group">
						<label for="">LOKASI</label>
						<input type="text" class="form-control" name="lokasi" placeholder="LOKASI ANDA SEKARANG">
					</div>
					<div class="form-group">
						<label for="">SUHU</label>
						<input type="text" class="form-control" name="suhu" placeholder="SUHU ANDA SEKARANG">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
			</form>
		</div>
	</div>
</div>