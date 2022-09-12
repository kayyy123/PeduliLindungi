<?php

require 'function.php';

if (isset($_SESSION["login"])) {
    $id_login = $_SESSION["login"];
    $users = query("SELECT * FROM users WHERE Id_user='$id_login'");
    $Photo_profile = findRow("SELECT Photo_profile FROM users WHERE Id_user='$id_login'", "Photo_profile");
} else {
    $Photo_profile = '';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang!</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>

<body>
    <div class="container">
        <nav>

            <div class="navbar">
                <div class="logo">
                    <div class="icon">

                    </div>
                    <h3>PeduliLindungi</h3>
                </div>
                <div class="atasan">
                    <a class="active" href="#Beranda">Beranda</a>
                    <a href="#tentang">Tentang</a>
                    <a href="#statistik">Statistik</a>
                    <a href="#Bahasa">Bahasa</a>
                </div>
                <?php if (isset($_SESSION["login"])) : ?>
                    <?php foreach ($users as $user) : ?>
                        <div class="account">
                            <div class="photo-profil">
                                <?php if (strlen($Photo_profile) > 1) : ?>
                                    <div class="custom" style="background-image: url(img/user-pic/<?= $user["Photo_profile"] ?>);">

                                    </div>
                                <?php else : ?>
                                    <div class="default">
                                        <h4><?= substr($user["Nama"], 0, 1) ?></h4>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if (strlen($user["Nama"]) >= 11) : ?>
                                <h3><?= substr($user["Nama"], 0, 11) ?>..</h3>
                                <img src="img/sort-down.png" class="dropdown" alt="" srcset="">
                            <?php else : ?>
                                <h3><?= $user["Nama"] ?></h3>
                                <img src="img/sort-down.png" class="dropdown" alt="" srcset="">
                            <?php endif; ?>
                            <div class="dropbtn">
                                <div class="dropdown-content">
                                    <a href="account.php"> 
                                        <img src="img/login.png" alt="">
                                        Profil
                                    </a>
                                    <a href="logout.php"> 
                                        <img src="img/exit.png" alt="">
                                        Keluar 
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div class="not_login">
                            <a href="login_form.php">Login</a>/
                            <a href="register_form.php">Register</a>
                        </div>
                    <?php endif; ?>
                        </div>
        </nav>
        <main>

            <div class="background-main">
                <div class="caption-main">
                    <h3>Lindungi diri dan sekitar dengan <br>berpartipasi dalam <br>Vaksinasi COVID 19</h3>
                    <a id="btn-cek" href="biodata.php">CEK SEKARANG</a>
                </div>
                <div class="icon-main">

                </div>
            </div>
        </main>
        <menu>
            <div class="menu">
                <a href="vaksinasi.php" class="vaksinasi">
                    <div class="icon-vaksinasi">
                        <img src="img/icon-vaksinasi.png" alt="" srcset="">
                    </div>
                    <h4>Vaksinasi & <br> Imunisasi</h4>
                </a>
                <a href="hasiltest.php" class="hasil-test">
                    <div class="icon-hasiltest">
                        <img src="img/icon-hasiltest.png" alt="" srcset="">
                    </div>
                    <h4>Hasil test <br> COVID-19</h4>
                </a>
                <a href="riwayat.php" class="riwayat">
                    <div class="icon-statistik">
                        <img src="img/World Map _Outline.png" alt="" srcset="">
                    </div>
                    <h4>Riwayat <br> Perjalanan</h4>
                </a>
            </div>
        </menu>
        <div class="tentang" id="tentang">

            <div class="tentang1">
                <div class="title-about1">
                    <h3 style="color: #0C25A9;">Tentang</h3>
                    <br>
                    <h2 style="color: #229BD8;">Apa itu</h2>
                    <h2 style="color: #229BD8;">PeduliLindungi?</h2>
                </div>
                <p>
                    PeduliLindungi adalah aplikasi yang dikembangkan untuk membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).
                    <br>
                    <br>
                    Aplikasi ini mengandalkan partisipasi masyarakat untuk saling membagikan data lokasinya saat bepergian agar penelusuran riwayat kontak dengan penderita COVID-19 dapat dilakukan.
                    <br>
                    <br>
                    Pengguna aplikasi ini juga akan mendapatkan notifikasi jika berada di keramaian atau berada di zona merah, yaitu area atau kelurahan yang sudah terdata bahwa ada orang yang terinfeksi COVID-19 positif atau ada Pasien Dalam Pengawasan.
                </p>
            </div>
            <div class="tentang2">
                <div class="title-about2">
                    <h3 style="color: #0C25A9;">Tentang</h3>
                    <br>
                    <h2 style=" color: #229BD8;">VAKSINASI</h2>
                    <h2 style="color: #229BD8;">COVID 19</h2>
                </div>
                <p>
                    Pada tahap awal, vaksinasi Covid-19 sudah berhasil diberikan kepada seluruh tenaga kesahatan, asisten tenaga kesehatan, dan mahasiswa yang menjalankan pendidikan profesi kedokteran yang bekerja pada fasilitas pelayanan kesehatan.
                    <br>
                    <br>
                    Vaksin tahap kedua juga sudah diberikan kepada lansia, pekerja sektor esensial, dan guru.
                    <br>
                    <br>
                    Pemerataan vaksinasi hingga saat ini dilanjutkan untuk masyarakat umum dan terus berjalan hingga berhasil menjangkau seluruh warga negara Indonesia dan warga negara asing yang bertempat tinggal di Indonesia.
                    <br>
                    <br>
                    Harapannya dengan upaya pemerataan vaksinasi ini, Indonesia dapat segera bangkit dan terbebas dari penyebaran virus Covid-19.
                </p>
            </div>
            <div class="statistik" id="statistik">
                <h1>Statistik COVID-19</h1>
                <br>
                <div class="row-1">
                    <div class="title-row">
                        <h3 style="color: #F77E21;">Terkonfirmasi</h3>
                    </div>
                    <div class="count">
                        <div class="coloum1">
                            <h5 style="color: #F77E21;">Depok</h5>
                            <h5 style="color: #F77E21;">Bogor</h5>
                            <h5 style="color: #F77E21;">Bekasi</h5>
                            <h5 style="color: #F77E21;">Jakarta</h5>
                        </div>
                        <div class="coloum2">
                            <h5 style="color: #F77E21;">175668</h5>
                            <h5 style="color: #F77E21;">63161</h5>
                            <h5 style="color: #F77E21;">175940</h5>
                            <h5 style="color: #F77E21;">1376074</h5>
                        </div>
                    </div>
                </div>
                <div class="row-2">
                    <div class="title-row">
                        <h3 style="color: green;">Sembuh</h3>
                    </div>
                    <div class="count">
                        <div class="coloum1">
                            <h5 style="color: green;">Depok</h5>
                            <h5 style="color: green;">Bogor</h5>
                            <h5 style="color: green;">Bekasi</h5>
                            <h5 style="color: green;">Jakarta</h5>
                        </div>
                        <div class="coloum2">
                            <h5 style="color: green;">164787</h5>
                            <h5 style="color: green;">61750</h5>
                            <h5 style="color: green;">135321</h5>
                            <h5 style="color: green;">1341152</h5>
                        </div>
                    </div>
                </div>
                <div class="row-3">
                    <div class="title-row">
                        <h3 style="color: red">Meninggal</h3>
                    </div>
                    <div class="count">
                        <div class="coloum1">
                            <h5 style="color: red">Depok</h5>
                            <h5 style="color: red">Bogor</h5>
                            <h5 style="color: red">Bekasi</h5>
                            <h5 style="color: red">Jakarta</h5>
                        </div>
                        <div class="coloum2">
                            <h5 style="color: red">2256</h5>
                            <h5 style="color: red">548</h5>
                            <h5 style="color: red">1180</h5>
                            <h5 style="color: red">15471</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer>
            
        </footer>
    </div>
</body>

</html>