<?php
require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('head.php');
    head_generate('HOME');
    ?>
</head>

<body>
    <?php
    include("navbar.php");
    ?>

    <section class="container">
        <div class="mt-5">
            <div class="d-flex flex-row">
                <div class="my-auto">
                    <h1 class="display-3 bold">Get your <span class="emp">vaccine</span>,</br>get your health.</h1>
                    <p class="lead">Get your body vaccinated, now! Available in Semarang.</p>
                    <a class="btn btn-primary" href="book_vaccine.php">Get Vaccinated</a>
                </div>
                <div class="hero">
                    <img src="img/hero.png" alt="">
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Sinovac</h1>
                    <p class="lead">CoronaVac, also known as the Sinovac COVID-19 vaccine, is an inactivated virus COVID-19 vaccine developed by the Chinese company Sinovac Biotech. It was Phase III clinical trialled in Brazil, Chile, Indonesia, the Philippines, and Turkey and relies on traditional technology similar to other inactivated-virus COVID-19 vaccines, such as the Sinopharm BIBP vaccine, another Chinese vaccine, and Covaxin, an Indian vaccine. CoronaVac does not need to be frozen and both the final product and the raw material for formulating CoronaVac can be transported refrigerated at 2–8 °C (36–46 °F), temperatures at which flu vaccines are kept.</p>
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row-reverse">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">AstraZenica</h1>
                    <p class="lead">Vaxzevria, also known as AstraZeneca is a vaccine for preventing coronavirus disease 2019 (COVID-19) in people aged 18 years and older. COVID-19 is caused by SARS-CoV-2 virus. Vaxzevria is made up of another virus (of the adenovirus family) that has been modified to contain the gene for making a protein from SARS-CoV-2.</p>
                </div>
                <div class="mx-auto">
                    <img src="img/syringe.png" alt="">
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Pfizer</h1>
                    <p class="lead">The Pfizer–BioNTech COVID-19 vaccine, sold under the brand name Comirnaty, is an mRNA-based COVID-19 vaccine developed by the German biotechnology company BioNTech and for its development collaborated with American company Pfizer, for support with clinical trials, logistics, and manufacturing. It is authorized for use in people aged five years and older in some judrisdictions, twelve years and older in some jurisdictions, and for people sixteen years and older in other jurisdictions,] to provide protection against COVID-19, caused by infection with the SARS-CoV-2 virus. The vaccine is given by intramuscular injection. It is composed of nucleoside-modified mRNA (modRNA) encoding a mutated form of the full-length spike protein of SARS-CoV-2, which is encapsulated in lipid nanoparticles.</p>
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="d-flex flex-row-reverse">
                <div class="w-50 my-auto">
                    <h1 class="display-5 orange">Sinopharm</h1>
                    <p class="lead">The Sinopharm BIBP COVID-19 vaccine, also known as BBIBP-CorV, the Sinopharm COVID-19 vaccine, or BIBP vaccine, is one of two inactivated virus COVID-19 vaccines developed by Sinopharm's Beijing Institute of Biological Products (sometimes written as Beijing Bio-Institute of Biological Products, resulting in the two different acronyms BBIBP and BIBP for the same vaccine). It completed Phase III trials in Argentina, Bahrain, Egypt, Morocco, Pakistan, Peru, and the United Arab Emirates (UAE) with over 60,000 participants. BBIBP-CorV shares similar technology with CoronaVac and Covaxin, other inactivated virus vaccines for COVID-19. Its product name is SARS-CoV-2 Vaccine (Vero Cell), not to be confused with the similar product name of CoronaVac.</p>
                </div>
            </div>

            <div class="my-5">
                <div class="d-flex flex-row">
                    <div class="w-50 my-auto">
                        <h4 class="display-5 orange">Check Hospital Vaccine Quota</h4>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Hospital List" aria-describedby="basic-addon2">
                        <div class="w-50">
                            <input class="btn btn-primary" type="button" value="Search">
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <br>
                <div class="container">
                    <ul class="row">
                        <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="img/RSND.jpg" />
                            <p>Kec.Tembalang</p>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="img/RSK.jpg" />
                            <p> Kec. Semarang Sel.</p>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="img/RSUWB.jpg" />
                            <p>Kec. Gajahmungkur</p>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="img/RSMP.jpg" />
                            <p>Kec. Ngaliyan
                            <p>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="img/RST.jpg" />
                            <p>Kec. Semarang Tgh.
                            <p>
                        </li>
                    </ul>
                </div>

                <br>
                <br>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h3 class="display-5 orange">Call Center</h3>
                        <h1 class="display-5 orange">123-456789</h1>
                    </div>

                </div>
    </section>

</body>

<footer>
    <br>
    <center>
        <img src="img\VaksinGO-logo.png">
    </center>
    <br>
    <br>
    <p align="center">Get your <span class="emp">vaccine</span>, Get your health</p>
    <br>
    <center>
        <a href="https://www.instagram.com/"><img src="img\instagram.png"></a>
        <a href="https://twitter.com/"><img src="img\twitter.png"></a>
        <a href="https://www.whatsapp.com/"><img src="img\whatsapp.png"></a>
        <a href="https://google.com/"><img src="img\google.png"></a>
    </center>
    <br>
    <p align="center">2021</p>
</footer>

</html>