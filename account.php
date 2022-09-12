<?php

require 'function.php';

if (isset($_SESSION["login"])) {
    $id_login = $_SESSION["login"];
    $users = query("SELECT * FROM users WHERE Id_user='$id_login'");
} else {
    $users = '';
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="CSS/account.css">
</head>

<body>
    <div class="container">
        <?php foreach ($users as $user) : ?>
            <div class="menu">
                <div class="account">
                    <div class="photo-profile">

                    </div>
                    <h1><?= $user["Nama"] ?></h1>
                </div>
                <div class="biodata">
                    <a href="#" id="btn-profile">Akun Saya</a>
                    <a href="#" id="btn-sertifikat">Sertifikat Vaksin</a>
                </div>
            </div>
            <div class="wrapper">
                <form method="POST" action="" class="profile" id="profile">
                    <div class="btn-wrapper">
                        <div class="photo-profile2" style="background-image: url(img/<?= $user["Photo_profile"] ?>);">
    
                        </div>
                        <button type="submit" name="submit">Perbarui</button>
                    </div>
                    <div class="input-area">
                        <div class="title-profil">
                            <h3>Profil</h3>
                        </div>
                        <div class="input-box">
                            <label class="details" for="Kewarganegaraan">Kewarganegaraan</label>
                            <select name="kewarganegaraan" id="Kewarganegaraan" required>
                                <option value="indonesia">indonesia</option>
                                <option value="Warga Negara Asing">Warga Negara Asing</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="Nik">NIK:</label>
                            <input type="text" name="Nik" id="Nik" value="<?= $user["Nik"] ?>">
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="ussername">Nama Lengkap:</label>
                            <input type="text" name="ussername" id="ussername" value="<?= $user["Nama"] ?>">
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="ttl">Tempat, Tanggal Lahir:</label>
                            <input type="date" name="ttl" id="ttl" value="<?= $user["Tanggal_lahir"] ?>">
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="nomor_pasport">Nomor Paspor:</label>
                            <input type="text" name="nomor_pasport" id="nomor_pasport" value="<?= $user["Nomor_paspor"] ?>">
                        </div>
                        <br>
                        <div class="input-box">
                            <label for="nomor_ponsel">Nomor Ponsel:</label>
                            <input type="text" name="nomor_ponsel" id="nomor_ponsel" value="<?= $user["No_hp"] ?>">
                        </div>
                        <br>
                    </div>
                </form>
                <div class="sertifikat" id="sertifikat">
                    <h1>Sertifikat Vaksin</h1>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="JS/index.js"></script>
</body>

</html>