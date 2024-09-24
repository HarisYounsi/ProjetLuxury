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
        Vous êtes connecté. <br/>
        Cliquez <a href="moncompte.php">ici</a> si vous n'êtes pas redirigé au bout de 5 secondes.
    </p>

</div>

<!--footer -->
<?php
require_once("footer.php");
?>

</body>

</html>