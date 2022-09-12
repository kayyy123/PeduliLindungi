<?php
 
$db = mysqli_connect("localhost","root","","pedulilindungi");
session_start();

function query($query) {
    global $db;
    $result = mysqli_query($db,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    };
    return $rows;
};

function findRow($query,$row) {
    global $db;
    $table = mysqli_query($db,$query);
    $coloums = mysqli_fetch_assoc($table);
    if (mysqli_num_rows($table) == 1) {
        $rows = $coloums[$row];
    }else {
        $rows = false;
    }
    return $rows;
};


function login($nik, $password) {
    global $db;
    $nik_user = findRow("SELECT * FROM users WHERE Nik='$nik'","Nik");
    $pass = findRow("SELECT * FROM users WHERE Nik='$nik'","Sandi");
    $id = findRow("SELECT * FROM users WHERE Nik='$nik'","Id_user");
    if ($nik === $nik_user && $password === $pass) {
        echo "
            <script>
                alert('Berhasil Login!');
                document.location.href = 'index.php';
            </script>
        ";
        $_SESSION["login"] = $id;
    }else {
        echo "
            <script>
                alert('nik atau sandi anda salah!');
                document.location.href = 'login_form.php';
            </script>
        ";
    }
}

function register($post) {
    global $db;
    $namalengkap = $post["nama_lengkap"];
    $sandi = $post["sandi"];
    $nik = $post["nik"];
    $kewarganegaraan = $post["kewarganegaraan"];
    $nomorTelp = $post["telp"];
    $ttl = $post["ttl"];
    $nomorPasport = $post["no_pasport"];
    $warnadefault = dechex(rand(0, 10000000));
    
    mysqli_query($db,"INSERT INTO users VALUES('','$namalengkap','$sandi','$nik','$nomorTelp','$kewarganegaraan','$ttl','$nomorPasport','')");
    $id = findRow("SELECT * FROM users WHERE Nama='$namalengkap'", "Id_user");
    if (mysqli_affected_rows($db) == 1) {
        echo "
            <script>
                alert('Regristrasi berhasil');
                document.location.href = 'index.php';
            </script>
        ";
        $_SESSION["login"] = $id;
    } else {
        echo "
            <script>
                alert('Regristrasi gagal');
                document.location.href = 'register_form.php';
            </script>
        ";
    }
}

function cekStatus($id) {
    $Status_kesehatan = findRow("SELECT * FROM users_status WHERE id_user='$id'","Status_kesehatan");
    $Status_vaksinasi = findRow("SELECT * FROM users_status WHERE id_user='$id'","Status_vaksinasi");

    $StatusKesehatan_valid = ["Hijau","Kuning"];
    $StatusVaksinasi_valid = ["1","2","3"];

    if (in_array($Status_kesehatan, $StatusKesehatan_valid) && in_array($Status_vaksinasi, $StatusVaksinasi_valid)) {
        echo "
                <script>
                    alert('DI izinkan');
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Tidak Diizinkan');
                </script>
            ";
    }
}


?>