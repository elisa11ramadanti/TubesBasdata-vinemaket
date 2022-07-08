<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "project_film_transaction");

return $conn;

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function rupiah($angka){
    
    $hasil_rupiah = number_format($angka,0,',','.');
    return $hasil_rupiah;
 
}

?>
