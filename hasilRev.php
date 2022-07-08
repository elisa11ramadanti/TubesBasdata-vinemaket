<?php
include 'koneksi.php';

$title = $_POST['title'];
$reviuw =$_POST['reviuw'];

$result = mysqli_query($mysqli, "INSERT INTO reviuw (id_film,reviuw_film) values('$title','$reviuw')");
echo "<script>alert('berhasil Menambahkan');</script>";
echo "<script>window.location.href='reviuw.php'</script>";
	
?>

