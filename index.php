<html>
<head>
	<title>Tampil Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="js/jquery-3.5.1.min.js"></script>
	<script type="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="card">
		<div class="card-header">Tampil Data
			<a href="tambah.php" class="btn btn-primary float-right">Tambah Data</a>
		</div>
		<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No </th>
					<th>Nama Kustomer</th>
					<th>Telepon</th>
					<th>Alamat</th>
					<th>Kota</th>
					<th>Kodepos</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include "koneksi.php";
					$no=1;
					$sql=mysqli_query($koneksi,"SELECT * FROM kustomer");
					while ($row=mysqli_fetch_array($sql)) {
				?>
					<tr>
						<td><?= $no++;?></td>
						<td><?= $row['nmkustomer'];?></td>
						<td><?= $row['telp'];?></td>
						<td><?= $row['alamat'];?></td>
						<td><?= $row['kota'];?></td>
						<td><?= $row['kodepos'];?></td>
						<td>
							<a href="edit.php?idkustomer=<?= $row['idkustomer']; ?>" class="btn btn-warning">Edit</a>
							<a href="delete.php?idkustomer=<?= $row['idkustomer']; ?>" class="btn btn-danger">Hapus</a></td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		</div>
		</div>
	</div>
</body>
</html>