<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);

// Enkripsi kata sandi dengan bcrypt
// $hashed_password = password_hash($password, PASSWORD_BCRYPT);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0 ){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin" ){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		echo "<script>
                    alert('Login Berhasil');
                    document.location.href='dashboard.php';
                  </script>";
				  
	// cek jika user login sebagai pegawai
    }else{

		// alihkan ke halaman login kembali
		echo "<script>
                    alert('login gagal');
                    document.location.href='login.php';
                  </script>";
	}

	
}else{
	echo "<script>
                    alert('Data Gagal Disimpan');
                    document.location.href='login.php';
                  </script>";
}



?>