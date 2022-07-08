<?php 
// mengaktifkan session php

 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($mysqli,"select * from pemesan where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
$rek = mysqli_query($mysqli,"select * from register where username='$username' and pass='$password'");
 
// menghitung jumlah data yang ditemukan
$dt = mysqli_num_rows($rek);

if($cek > 0){
	
	header("location:admin/index.php");
}elseif($dt > 0){
	
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>