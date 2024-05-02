<div class="container">
	<br>
	<div class="box">
		<div class="box-header">
			<h3>Catatan Vaksin</h3>
			<a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i>Isi Catatan Vaksin</a>
			<a href="vaksin/print.php" class="btn btn-info"><i class="fa fa-print"></i> </a>
		</div>
		<div class="box-body">
			<table id="example" class="table table-hover">
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
						<td><img src="../assets/vaksin/<?php echo $tmp['foto'] ?>" height="100"> </td>
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
				<form action="vaksin/simpan.php" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Keterangan</label>
						<input type="hidden" name="nik" value="<?php echo $_SESSION['nik'] ?>" >
						<input type="text" class="form-control" name="ket">
					</div>
					<div class="form-group">
						<label for="">fhoto</label>
						<input type="file" class="form-control" name="foto" placeholder="LOKASI ANDA SEKARANG">
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