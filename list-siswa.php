<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Telkom Malang</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style-list.css">
</head>

<body>
	<header class="asem">
		<h2 class="asem">SISWA YANG SUDAH MENDAFTAR</h2>
	</header>
	<a href="form-daftar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">TAMBAH BARU</a>
	<table class="table">
	<div id="background">
		<thead>
			<tr class="table-info">
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Sekolah Asal</th>
				<th>Tindakan</th>
			</tr>
		</thead>
</div>
		<tbody>	
			<?php
			$sql = "SELECT * FROM calon_siswa";
			$query = mysqli_query($db, $sql);

			while($siswa = mysqli_fetch_array($query)){
				echo "<tr>";

				echo "<td>".$siswa['id']."</td>";
				echo "<td>".$siswa['nama']."</td>";
				echo "<td>".$siswa['alamat']."</td>";
				echo "<td>".$siswa['jenis_kelamin']."</td>";
				echo "<td>".$siswa['agama']."</td>";
				echo "<td>".$siswa['sekolah_asal']."</td>";

				echo "<td>";
				echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
				echo "</td>";

				echo "</tr>";
			}
			?>
		</tbody>
			<p class="total">Total: <?php echo mysqli_num_rows($query); ?></p>
	</body>
</html>