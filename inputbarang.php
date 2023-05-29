<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>srihendras</title>
        <style>
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

            
        </style>
    </head>
    <body>
        <h1>Input Data</h1>
        <div class="container">
            <form id="form_barang" action="proses_inputbarang.php" method="post" class="login-id">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Input Barang</p>
                <div class="input-group">
                    <input type="text" placeholder="Nama Barang" name="namabarang" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Harga Barang" name="hargabarang" required>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Submit</button>
                </div>
                <p class="login-register-text"><a href="index.php">KEMBALI</a></p>
            </form>
        </div>
    </body>