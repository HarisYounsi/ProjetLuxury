<?php
session_start();
require_once("db.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Luxury Motorsport - Acceuil</title>
    <meta charset="utf8"/>
    <link href="css/lestyle.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="css/index.css" rel="stylesheet">

    <!--implantation de boostrap 4 (pour avoir des trucs stylé facilement)-->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>

    <!-- implantation de ajax jquerry-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- tout sa c'est pour la barre qui défile les marques-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="JS/index_carousel.js"></script>


</head>

<body class="body">
<!-- header -->
<?php
 require_once("header.php");
?>

<div style="width: 65%; margin : auto; padding-bottom: 30px; padding-top: 30px ">

    <div class="container">
            <img src="img/amg-gtr1.jpg" alt="Norway" style="width:100%">
            <a href="#" class="bloc-text"> La plus populaire !</a>
    </div>

    <hr>

    <p class="info"> Nos marques disponibles</p>
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">
                        <div class="owl-carousel owl-theme brands_slider">
                            <div class="owl-item">
                                <div style="width: 80px"><img src="img/kemar/aston.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 80px"><img src="img/kemar/ben.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 80px"><img src="img/kemar/audi.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 80px"><img src="img/kemar/bugat.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 50px"><img src="img/kemar/ferra.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 80px"><img src="img/kemar/ford.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 50px"><img src="img/kemar/lamb.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 80px"><img src="img/kemar/jeep.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 50px"><img src="img/kemar/rr.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 50px"><img src="img/kemar/tesl.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 90px"><img src="img/kemar/rover.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 50px"><img src="img/kemar/merco.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 80px"><img src="img/kemar/por.png"  alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div style="width: 50px"><img src="img/kemar/bmw.png"  alt=""></div>
                            </div>

                        </div> <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">

        <div class="blue">
            <div>
                <a href="#"> <img src="img/rs6.jpg" alt="Norway" style="width:100%;"> </a>
                <a href="#" class="bloc-text2"> Berlines</a>
            </div>
        </div>

        <div class="blue">
            <div>
                <a href="#"> <img src="img/tesla3.jpeg" alt="Norway" style="width:100%;"> </a>
                <a href="#" class="bloc-text2"> Électriques</a>
            </div>
        </div>

        <div class="blue">
            <div>
                <a href="#"> <img src="img/wrangler.jpg" alt="Norway" style="width:100%;"> </a>
                <a href="#" class="bloc-text2"> SUV</a>
            </div>
        </div>

    </div>

    <hr>

    <p class="information">
    Spécialisée dans la location de grand luxe dans les principales villes françaises,
    l’entreprise LUXURY CLUB met à votre disposition voitures de prestige et yachts.
    De Paris à Monaco, en passant par Cannes, LUXURY CLUB vous propose ses services de
    location de voiture de luxe avec ou sans chauffeur privé. Que ce soit pour un simple
    trajet à bord d’une voiture avec chauffeur pour affaires ou pour le plaisir de conduire
    un véhicule de sport comme une Ferrari, LUXURY CLUB répond à toutes vos demandes.
    Forte de plusieurs années d’expérience dans la location de grand luxe, en général,
    et dans la mise à disposition de voiture de prestige, en particulier, notre équipe
    met tout en œuvre pour vous proposer les meilleures prestations.
    </p>

</div>

<!--footer -->
<?php
require_once("footer.php");
?>


</body>


</html>