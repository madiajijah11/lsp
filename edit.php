<?php
	include "koneksi.php";
	$id=$_GET['idkustomer'] ? $_GET['idkustomer'] : "";
	$sql=mysqli_query($koneksi,"SELECT * FROM kustomer WHERE idkustomer='$id'");
	$row=mysqli_fetch_array($sql);
?>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="js/jquery-3.5.1.min.js"></script>
	<script type="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">Edit Data Kustomer</div>
			<div class="card-body">
				<form class="form-item" action="" method="post" role="form">
					<div class="form-group">
						<label for="nama"> Nama</label>
						<input type="text" class="form-control" name="nmkustomer" placeholder="Nama Kustomer" value="<?= $row['nmkustomer']; ?>">
					</div>			
					<div class="form-group">
						<label for="telp">Telepon</label>
						<input type="text" class="form-control" name="telp" placeholder="Telepon" value="<?= $row['telp']; ?>">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $row['alamat']; ?>">
					</div>
					<div class="form-group">
						<label for="kota">Kota</label>
						<input type="text" class="form-control" name="kota" placeholder="Kota" value="<?= $row['kota']; ?>">
					</div>
					<div class="form-group">
						<label for="kodepos">Kodepos</label>
						<input type="text" class="form-control" name="kodepos" placeholder="Kodepos" value="<?= $row['kodepos']; ?>">
					</div>
					<button type="submit" name="edit" class="btn btn-primary">Edit</button>
					<a href="index.php" class="btn btn-warning">Kembali</a>
				</form>
				<?php
					if (isset($_POST['edit'])) {
						$nmkustomer=$_POST['nmkustomer'];
						$telp=$_POST['telp'];
						$alamat=$_POST['alamat'];
						$kota=$_POST['kota'];
						$kodepos=$_POST['kodepos'];
						mysqli_query($koneksi,"UPDATE kustomer SET nmkustomer='$nmkustomer',telp='$telp',alamat='$alamat',kota='$kota',kodepos='$kodepos' WHERE idkustomer='$id'") or die (mysqli_error($koneksi));
						header('Location:index.php');
					}
				?>
			</div>
		</div>
	</div>
</body>