<?php

require 'function.php';

if (!isset($_SESSION["login"])) {
    header('Location: login_form.php');
}
$id = $_SESSION["login"];

if (isset($_POST["submit"])) {
    cekStatus($id);
}

$query = query("SELECT * FROM users WHERE Id_user='$id'");


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/biodata.css">
    <title>Document</title>
</head>

<body onload="ambilLokasi();">
    <div class="container">
        <?php foreach ($query as $q): ?>
            <form action="" method="POST">
                <div class="title">
                    <h2>Check In</h2>
                    <p>masuk ke ruang publik</p>
                </div>
                <div class="input-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" id="nama-lengkap" value="<?= $q["Nama"] ?>" disabled>
                </div>
                <div class="input-group">
                    <label for="thi">Tanggal/Hari ini</label>
                    <input type="text" id="thi" value="<?= date("Y/M/D") ?>" disabled>
                </div>
                <div class="input-group" id="spesial">
                    <label for="lokasi">Lokasi Saat ini</label>
                    <input type="text" id="lokasi" placeholder=" contoh: nama jalan, kecamatan, kelurahan, provinsi">
                    <ul id="list-kota">
                        
                    </ul>
                    <iframe frameborder="1" id="frame" width="395" height="210"></iframe>
                </div>
                <div class="input-group">
                    <input type="hidden" id="latitude">
                </div>
                <div class="input-group">
                    <input type="hidden" id="longitude">
                </div>
                <div class="input-group">
                    <button type="submit" name="submit">Check In</button>
                </div>
            </form>
        <?php endforeach; ?>
    </div>
    <script src="JS/script.js"></script>
</body>

</html>