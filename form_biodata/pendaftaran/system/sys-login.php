<?php 
session_start();
include '../koneksi/koneksi.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$perintah = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$eksekusi = $host->query($perintah);
	$cek = $eksekusi->num_rows;
	$data = $eksekusi->fetch_array();

	$perintah1 = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$eksekusi1 = $host->query($perintah1);
	$cek1 = $eksekusi1->num_rows;
	$data1 = $eksekusi1->fetch_array();

	if ($cek == 1) {
		$_SESSION['nama_pendaftar'] = $data['nama_pendaftar'];
		$_SESSION['NISN'] = $data['NISN'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];

		header('location:../status-interface/status-user.php');
	}elseif ($cek1 == 1) {
		$_SESSION['id_petugas'] = $data1['id_petugas'];
		$_SESSION['nama_petugas'] = $data1['nama_petugas '];
		$_SESSION['username'] = $data1['username'];
		$_SESSION['password'] = $data1['password'];
		$_SESSION['telp'] = $data1['telp'];
		$_SESSION['level'] = $data1['level'];

		header('location:../view/petugas/index.php');
	}else {
		echo "<script>
			alert('username atau password salah')
			document.location.href='../view/login.php'
		</script>";
	}

}
 ?>		