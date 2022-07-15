<?php 
	
	include "koneksi.php";

	if (isset($_POST['kirim'])) {
		mysqli_query($koneksi,"insert into pendaftaran set
		nama = '$_POST[nama]',
		no_hp = '$_POST[no_hp]',
		email = '$_POST[email]',
		jk = '$_POST[jk]'");

		echo "<script>alert('Anda Berhasil Mendaftar Program Study Kampus, Klik Ok untuk menuju Web kami ....');
		window.location='tampilan.php'</script>";
	}
?>
