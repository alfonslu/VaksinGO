<?php

require_once("config.php");

if (isset($_POST['register'])) {

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $no_telp = filter_input(INPUT_POST, 'no_telp', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO user (name, username, email,no_telp, password) 
            VALUES (:name, :username, :email, :no_telp, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":email" => $email,
        ":password" => $password,
        ":name" => $name,
        ":no_telp" => $no_telp,
        ":username" => $username

    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if ($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('head.php');
    head_generate('Register');
    ?>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <p>&larr; <a href="index.php">Home</a>
                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
                    </div>

                    <div class="form-group">
                        <label for="email">No Telepon</label>
                        <input class="form-control" type="text" name="no_telp" placeholder="No Telepon" />
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

                </form>

            </div>

        </div>
    </div>

</body>

</html>