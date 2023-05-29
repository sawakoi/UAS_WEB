<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

$namabarang = $_POST['namabarang'];
$hargabarang = $_POST['hargabarang'];

$query = "INSERT INTO barang values (NULL,'$namabarang','$hargabarang')";
$result = mysqli_query($conn, $query);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
}
}

header("location:viewbarang.php");
?>