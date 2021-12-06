<?php
require_once('auth.php');
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

                <form action="" method="POST">

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
                        <input type="radio" id="sinovac" name="vaccine" value="Sinovac">
                        <label for="sinovac">Sinovac</label>
                        <input type="radio" id="Pfizer" name="vaccine" value="Pfizer">
                        <label for="Pfizer">Pfizer</label>
                        <input type="radio" id="astrazenica" name="vaccine" value="AstraZenica">
                        <label for="astrazenica">AstraZenica</label>
                        <input type="radio" id="sinopharm" name="vaccine" value="sSnopharm">
                        <label for="sinopharm">Sinopharm</label>
                    </div>

                    <div class="form-group">
                        <label for="cars">Choose Hospital</label><br>
                        <select id="cars" name="cars">
                            <option value="rsnd">RS Nasional Diponegoro</option>
                            <option value="kariadi">RSUP Dr. Kariadi</option>
                            <option value="william">RSU William Booth</option>
                            <option value="permata-medika">RS Permata Medika</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" name="login" value="Masuk" />

                </form>

            </div>


        </div>
    </div>

</body>

</html>