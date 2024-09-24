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
    <link href="css/log.css" rel="stylesheet">

</head>

<body class="body">
<!-- header -->
<?php
require_once("header.php");
?>

<div style="width: 65%; margin : auto; padding-bottom: 231px; padding-top: 235px ">

    <p class="information">
        Vous avez été déconnecté. <br/>
        Cliquez <a href="index.php">ici</a> pour revenir à la page d'acceuil.
    </p>

</div>

<!--footer -->
<?php
require_once("footer.php");
?>

</body>

</html>