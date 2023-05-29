<?php

include ("koneksi.php");

if (isset($_GET['id'])){
    

    $id = $_GET['id'];

    $query = "DELETE FROM barang WHERE id ='$id'";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("gagal menghapus data: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
}

header("location:viewbarang.php");
?>