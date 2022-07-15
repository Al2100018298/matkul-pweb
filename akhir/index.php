<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Study Kampus</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<div class="content">
		<h1>Formulir Pendaftaran Study Kampus</h1>
			<form action="proses.php" method="POST">
				<table>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>No. Handphone</td>
						<td>:</td>
						<td><input type="number" name="no_hp"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk" value="laki-laki">Laki-laki
							<input type="radio" name="jk" value="Perempuan">Perempuan
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<button type="submit" name="kirim">Kirim</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>