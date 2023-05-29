<?php 
if (isset($_POST['edit'])){
    include("koneksi.php");

    $id = $_POST['id'];
    $namabarang = $_POST['namabarang'];
    $hargabarang = $_POST['hargabarang'];

    $query = "UPDATE barang SET namabarang = '$namabarang', hargabarang = '$hargabarang' WHERE id ='$id'";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
}

header("location:viewbarang.php");
?>