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

    <link href="css/cata.css" rel="stylesheet">



</head>

<body class="body">
<!-- header -->
<?php
require_once("header.php");
?>

<div style="width: 65%; margin : auto; padding-bottom: 30px; padding-top: 30px ">

    <div>
        <img src="img/turvoi/rs6.jpg" alt="Norway" style="width:100%">
voici la audi rs6<br/>
        puissance : 605 ch<br/>
        cylindre : 3993 m^3<br/>
        prix : 130 000 €<br/>
        vitesse max : 280 km/h<br/>
        places : 5<br/>
        type : berline<br/>
        transmission : integrale<br/>
        moteur : v8<br/>

    </div>

    <div style="float:right">
        ajouter au panier
    </div>


</div>

<!--footer -->
<?php
require_once("footer.php");
?>


</body>


</html>