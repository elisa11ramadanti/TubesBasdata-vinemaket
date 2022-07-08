<?php

include 'koneksi.php';
$email = $_POST['email'];
$username=$_POST['username'];
$password =$_POST['password'];


$result = mysqli_query($mysqli, "INSERT INTO register(email,username,pass) values('$email','$username','$password')");


echo "<script>alert('berhasil Sign-Up');</script>";
echo "<script>window.location.href='index.php'</script>";
	
?>