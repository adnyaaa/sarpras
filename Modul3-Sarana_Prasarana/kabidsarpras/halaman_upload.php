<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SI Sarpras</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles.css" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>
<div class="container mt-5">
	<div class="container-sm">
		<form action="ScriptFileUpload.php" method="post" enctype="multipart/form-data">
			<table class="table">
				<div class="mb-3">
					<tr class="table-dark">
						<td align="center" colspan=6>
							INPUT LAPORAN MAINTENANCE BULANAN
						</td>
					</tr>
					<tr>
						<td>Nama Laporan</td>
						<td>:</td>
						<td>
							<input class="form-control-plaintext" type="text" name="nama_laporan" size=20>
						</td>
					</tr>
					<tr>
						<td>Upload File</td>
						<td>:</td>
						<td>
							<input class="form-control-plaintext" type="file" name="Laporanadmin" accept="application/pdf" size=20 value="<?php echo $hasil['id_pengajuan_barang'] ?>">
						</td>
					</tr>
					<tr>
						<td>
							<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
							<input type="button" name="kembali" class="btn btn-secondary" value="Kembali" onclick="self.history.back()">
						</td>
					</tr>

		</form>
		<hr>
		</body>

</html>