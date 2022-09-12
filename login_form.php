<?php

require 'function.php';

if (isset($_POST["submit"])) {
    $nik = $_POST["nik"];
    $password = $_POST["password"];
    login($nik, $password);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Lindungi</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">

            </div>
            <h3>PeduliLindungi</h3>
        </div>
        <div class="form">
            <div class="brand">
                <div class="logo-2">

                </div>
                <h3>PeduliLindungi</h3>
            </div>
            <form action="" method="post">
                <label for="nik">Nik</label>
                <br>
                <input type="text" id="nik" placeholder="Masukan Nik" name="nik" maxlength="16" required><br>
                <label for="password">Kata Sandi</label>
                <br>
                <input type="password" id="password" placeholder="Masukan Kata Sandi" name="password" maxlength="50" required><br>
                <button id="submit" type="submit" name="submit">MASUK</button>
            </form>
       </div>
    </div>
</div>

    
</body>
</html>