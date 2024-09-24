<?php
session_start();
require_once("db.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Luxury Motorsport - Connexion</title>
    <meta charset="utf8"/>
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/lestyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link href="css/connexion.css" rel="stylesheet">
    <!-- Ne pas mettre cette ligne dans les autres pages car elle est propre à la page connexion, sinon il y aura des erreurs -->

</head>

<body>
<!-- header -->
<?php
require_once("header.php");
?>

<!--La page-->
<div style="width: 65%; margin : auto; padding-bottom: 230px; padding-top: 150px ">

        <h1>Se connecter</h1>

    <!-- SI L'IDENTIFIANT OU LE MDP EST INCORRECT : MESSAGE D'ERREUR -->
    <?php
    if (isset($_SESSION["error"]) == true) {
        echo "<p style='font-size=50px; color:#c30000; text-align: center; padding-bottom: '>Identifiant ou mot de passe incorrect.</p>";
        unset($_SESSION["error"]);
    }
    ?>

    <!-- CORRESPONDANCE ENTRE LES INFORMATION DE CONNEXION DE LA BDD & LE PAGE CONNEXION -->
    <?php
    if (count($_GET) > 0) {
        $lemail = $_GET["lemail"];  // on stock dans la variable $lemail ce qu'on a tappé dans le champ de connexion (ligne 66)
        $lemdp = $_GET["mdp"];      // pareil

        $sql = "SELECT * FROM utilisateurs WHERE email = '" . $lemail . "' and password = '" . $lemdp . "'"; //on regarde si ce qu'on a saisi correspond avec un compte existant dans la bdd

        $result = mysqli_query($conn, $sql); // juste pour eviter les injection sql
        $row = mysqli_fetch_array($result);  // juste pour eviter les injection sql

        if ($row != null) {
            $_SESSION["ID"] = $row["id"];   //si la connexion est réussie : la variable session est "active" donc on est connecté au site en tant que membre
            header("location:login.php");
        } else {
            $_SESSION["error"] = "identifiants incorrects";    //sinon message d'erreur stylisé plus haut
            header("location:connexion.php");           //être redirigé sur la même page (donc rien ne bouge si on arrive pas a se connecter)
        }
    }
    ?>



    <form action="connexion.php" method="GET">
        <div class="box">
            <input type="text"      placeholder="E-mail"  name="lemail"   class="saisie"/>
            <input type="password"  placeholder="Mot de passe"   name="mdp"   class="saisie"/>

            <!-- bouton connexion -->
            <div><input type="submit" value="Connexion"  class="btn" /></div>
        </div>

        <!--mdp oublié & inscription-->
        <div class="ptitbouton">
            <a href="inscription.php">Pas de compte ? Inscrivez vous !</a>
            <br/><br/>
            <a href="#">Mot de passe oublié ?</a>
        </div>

    </form>


</div>


<!--footer -->
<?php
require_once("footer.php");
?>


</body>


</html>