<?php
session_start();
require_once("db.php");
?>

<!doctype html>
<html>

<head>
    <title>Luxury Motorsport - Mon compte</title>
    <meta charset="utf8"/>
    <link href="css/lestyle.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="css/moncompte.css" rel="stylesheet">

    <!--implantation de boostrap 4 (pour avoir des trucs stylé facilement)-->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>

    <!-- implantation de ajax jquerry-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="body">
<!-- header -->
<?php
require_once("header.php");
?>

<div style="width: 65%; margin : auto; padding-bottom: 350px; padding-top: 50px ">

    NOM :<br/><br/>
    PRENOM :<br/><br/>
    EMAIL :<br/><br/>
    DATE DE NAISSANCE :<br/><br/>
    GENRE :<br/><br/>


    <!-- Le bouton déconnexion mène a logout.php qui contient un script qui déconnecte l'utilisateur -->
    <form action="logout.php" method="GET">
        <div style="float: right">
            <div><input type="submit" value="Déconnexion"  class="btn" /></div>
        </div>
    </form>

</div>

<!--footer -->
<?php
require_once("footer.php");
?>

</body>

</html>