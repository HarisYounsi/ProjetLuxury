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

    <link href="css/inscription.css" rel="stylesheet">
    <script type="text/javascript" src="JS/inscription.js" ></script>

</head>

<body class="body">
<!-- header -->
<?php
require_once("header.php");
?>

<div style="width: 65%; margin : auto; padding-bottom: 150px; padding-top: 100px "> <!-- la page -->

    <form action="inscription-traitement.php" method="post" class="sousForm" onsubmit="return validerInscription()">
        <div class="container2">
            <h1>Créez un nouveau compte !</h1>
            <hr>

            <div> <!-- CHAMPS DE SAISIE -->
                <div>
                    <input type="text"  placeholder="Prénom" name="prenom" id="prenom" required>
                    <p class="conditionsg">

                    <input type="text"  placeholder="Nom" name="nom" id="nom" required >
                    <p class="conditionsg">

                </div>

                <div>
                    <input type="text"  placeholder="E-Mail" name="email" id="email" required>


                    <input type="password"  placeholder="Nouveau mot de passe" name="mdp1" id="mdp1" required>

                    <input type="password"  placeholder="Répetez le mot de passe" name="mdp2" id="mdp2" required>

                    <p class="conditionsg">

                    </p>

                    <hr>
                </div>
            </div>

            <div>
                <p class="minititre">Date de naissance & genre</p> <!--DATE DE NAISSANCE + GENRE-->

                <input type="date"  name="ddn" id="ddn" required > <!--DATE DE NAISSANCE-->
                <p class="conditionsg">


                <select name="gender" id="gender" required > <!-- GENRE -->
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <hr>
            <p class="conditionsg">
                En cliquant sur S’inscrire, vous acceptez nos <a href="#" style="color:#6589a2">Conditions générales.</a>
                Découvrez comment nous recueillons, utilisons et partageons vos données
                en lisant notre <a href="#" style="color:#6589a2">Politique d’utilisation des données</a> et comment nous utilisons
                les cookies et autres technologies similaires en consultant notre <a href="#" style="color:#6589a2">Politique d’utilisation des cookies.</a>
            </p>

            <div class="clearfix">
                <button type="submit" name="inscriptionbtn" class="signupbtn">S'inscrire</button>
            </div>

        </div>
    </form>



</div>


<!--footer -->
<?php
require_once("footer.php");
?>


</body>


</html>