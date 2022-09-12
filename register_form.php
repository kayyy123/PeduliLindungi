<?php

require 'function.php';

if (isset($_POST["submit"])) {
    register($_POST);
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI</title>
    <link rel="stylesheet" href="CSS/register.css">
</head>

<body>
    <div class="container">
        <div class="title">
            <div class="brand">
                <div class="logo-2">

                </div>
                <h3>PeduliLindungi</h3>
            </div>
        </div>
        <form action="" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <label class="details" for="Nama_lengkap">Nama Lengkap</label><br>
                    <input type="text" placeholder="Masukan Nama Lengkap" id="Nama_lengkap" name="nama_lengkap" maxlength="50" required>
                </div>
                <div class="input-box">
                    <label class="details" for="TTL">Tanggal Lahir</label><br>
                    <input type="date" placeholder="Masukan Tanggal Lahir Anda" id="TTL" name="ttl" required>
                </div>
                <div class="input-box">
                    <label class="details" for="Nik">NIK</label><br>
                    <input type="text" placeholder="Masukan NIK" id="Nik" name="nik" maxlength="16" required>
                </div>
                <div class="input-box">
                    <label class="details" for="Telp">Nomor Telepon</label><br>
                    <input type="text" placeholder="Masukan No Telepon" id="Telp" name="telp" maxlength="15" required>
                </div>
                <div class="input-box">
                    <label class="details" for="no_pasport">Nomor Pasport</label><br>
                    <input type="text" placeholder="Masukan No Pasport (Optional)" id="no_pasport" name="no_pasport">
                </div>
                <div class="input-box">
                    <label class="details" for="Kewarganegaraan">Kewarganegaraan</label><br>
                    <!-- <input type="" placeholder="Pilih Kewarganegaraan" id="Kewarganegaraan"> -->
                    <select name="kewarganegaraan" id="Kewarganegaraan" required>
                        <option value="indonesia">indonesia</option>
                        <option value="Warga Negara Asing">Warga Negara Asing</option>
                    </select>
                </div>
                <div class="input-box">
                    <label class="details" for="sandi">Kata Sandi</label><br>
                    <input type="password" placeholder="Masukan Kata Sandi" id="sandi" name="sandi" maxlength="50" required>
                </div>
                <div class="input-box">
                    <label class="details" for="konfirmasi_sandi">Konfirmasi Kata Sandi</label><br>
                    <input type="password" placeholder="kofirmasi Kata Sandi" id="konfirmasi_sandi" name="konfirmasi_sandi" maxlength="50" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register" name="submit" id="submit">
            </div>
        </form>
    </div>
</body>

</html>