<!DOCTYPE html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="js/jquery-3.5.1.min.js"></script>
	<script type="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header"> Tambah Data Kustomer </div>
			<div class="card-body">
				<form class="form-item" action="" method="post" role="form">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="nmkustomer" placeholder="Nama Kustomer">
					</div>
					<div class="form-group">
						<label for="telp">Telepon</label>
						<input type="text" class="form-control" name="telp" placeholder="No Telp">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat" placeholder="Alamat">
					</div>
					<div class="form-group">
						<label for="kota">Kota</label>
						<input type="text" class="form-control" name="kota" placeholder="Kota">
					</div>
					<div class="form-group">
						<label for="kodepos">Kodepos</label>
						<input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
					</div>
					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-warning">Reset</button>
					<a href="index.php" class="btn btn-success">Kembali</a>
				</form>
				<?php
					include "koneksi.php";

					if (isset($_POST['simpan'])) {
						$nmkustomer=$_POST['nmkustomer'];
						$telp=$_POST['telp'];
						$alamat=$_POST['alamat'];
						$kota=$_POST['kota'];
						$kodepos=$_POST['kodepos'];
						mysqli_query($koneksi,"INSERT INTO kustomer (nmkustomer,telp,alamat,kota,kodepos) VALUES ('$nmkustomer','$telp','$alamat','$kota','$kodepos')") or die (mysqli_error($koneksi));
						header('location:index.php');
					}
				?>
			</div>
		</div>
	</div>
</body>