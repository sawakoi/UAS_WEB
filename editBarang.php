<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $id =($_GET["id"]);
    $query = "SELECT * FROM barang WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die ("Query Error: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result);
    $id = $data["id"];
    $namabarang = $data["namabarang"];
    $hargabarang = $data["hargabarang"];
}else{
    header("location:viewbarang.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            .constrainer{
                width: 400px;
                margin: auto;
            }
            h1{
                text-align:center;
            }
            .container{
                width: 400px;
                margin: auto;
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
            body .navbar .navbar-header .navbar-brand {
                color: red;
            }
            body .navbar .nav  a {
                color: red;
            }
            legend {
                color:red;
            }
            p {
                color:red;
            }
            fieldset {
                background-color:black;
                opacity:90%;
            }
        </style>
    </head>
    <body>
        <h1>Edit Data</h1>
        <div class="constrainer">
            <form id="form_mahasiswa" action="proses_editbarang.php" method="post">
                <fieldset>
                    <legend>Edit Data Dosen</legend>
                    <p>
                        <label for="id">ID : </label>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="text" name="idDisabled" id="idDisabled" value="<?php echo $id ?>" disabled>
                    </p>
                    <p>
                        <label for="namabarang">Nama Dosen : </label>
                        <input type="text" name="namabarang" id="namabarang" value="<?php echo $namabarang ?>">
                    </p>
                    <p>
                        <label for="hargabarang">No HP : </label>
                        <input type="text" name="hargabarang" id="hargabarang" value="<?php echo $hargabarang ?>">
                    </p>
                </fieldset>
                <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
    </body>
</html>