<?php
require_once('auth.php');
?>

<?php

if (isset($_POST['login'])) {
    $user_id = $_SESSION['user']['id'];
    $nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $vaccine = filter_input(INPUT_POST, 'vaccine', FILTER_SANITIZE_STRING);
    $vaccine_id = "SELECT * FROM vaccine_type WHERE name == $vaccine";
    $hospital = filter_input(INPUT_POST, 'hospital', FILTER_SANITIZE_STRING);
    $hospital_id = "SELECT * FROM hospital WHERE name == $hospital";
    $date_created = date("Y-m-d");

    $sql = "INSERT INTO vaccine_schedule (user_id,nik,address,vaccine_id,hospital_id,) VALUES (':user_id',':nik',':address',':vaccine_id',':hospital_id',':date_created')";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":user_id" => $user_id,
        ":nik" => $nik,
        ":address" => $address,
        ":vaccine" => $vaccine_id,
        ":hospital" => $hospital_id,
        ":date_created" => $date_created,
    );

    $stmt->execute($params);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //Kondisi apakah berhasil atau tidak
    if ($result) {
        echo "Berhasil insert data";
        exit;
    } else {
        echo "Gagal insert data";
        exit;
    }
}
?>

<html>

<head>
    <?php
    include('head.php');
    head_generate('BOOK VACCINE');
    ?>
</head>


<body class="bg-light">
    <?php
    include("navbar.php");
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <a href="index.php">&larr;Home</a>

                <h4>Daftar Vaksin melalui VaksinGO</h4>

                <form action="Booked.php" method="POST">

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input class="form-control" type="text" name="NIK" placeholder="NIK" />
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="address" placeholder="Address" />
                    </div>

                    <div class="form-group">
                        <label for="vaccine">Vaccine</label><br>
                        <?php
                            $vaccine=array("Sinovac","Pfizer","Astrazeneca","Sinopharm");
                            sizeof($vaccine,1);
                        ?>
                        <b> Pilih jenis vaksin : </b><br>
                            <input type="radio" name="vaksin" value="Sinovac">Sinovac
                            <input type="radio" name="vaksin" value="Sinovac">Pfizer
                            <input type="radio" name="vaksin" value="Sinovac">Astrazeneca
                            <input type="radio" name="vaksin" value="Sinovac">Sinopharm
                    </div>

                    <div class="form-group">
                        <label for="hospital">Choose Hospital</label><br>
                        <select id="hospital" name="hospital">
                            <option value="rsnd">RS Nasional Diponegoro</option>
                            <option value="kariadi">RSUP Dr. Kariadi</option>
                            <option value="william">RSU William Booth</option>
                            <option value="permata-medika">RS Permata Medika</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" name="login" value="Daftar Vaksinasi" />

                </form>

            </div>


        </div>
    </div>

</body>

<?php
include("footer.php")
?>

</html>
