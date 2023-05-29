<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
    <head>
        <style>
            table{
                width: 840px;
                margin: auto;
            }
            h1{
                text-align: center;
                color: red;
            }
            body {
                width: 100%;
                min-height: 100vh;
                background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(images/hustle.png);
                background-position: center;
                background-size: cover;
                justify-content: center;
                align-items: center;
            }
             th {
                color: red;
            }
            table {
                background-color: white;
                opacity: 70%;
            }
        </style>
    </head>
    <body>
        <h1>Daftar Barang</h1>
        <center><a href="index.php"><input type="submit" name="inputdata" value="Home"></a></center>
        <br/>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
            </tr>
            <?php
            $query = "SELECT * FROM barang Order BY id ASC";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($conn)." - ".mysqli_error($conn));
            }

            while ($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>$data[id]</td>";
                echo "<td>$data[namabarang]</td>";
                echo "<td>$data[hargabarang]</td>";
                echo '<td>
                    <a href="editBarang.php?id='.$data['id'].'">Edit</a> /
                    <a href="hapusbarang.php?id='.$data['id'].'"
                        onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
                </td>';
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>