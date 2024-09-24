<?php
require_once("db.php");
?>

<script src="JS/jquery-3.6.0.min.js"></script>
<link href="css/jquery.toast.css" rel="stylesheet">
<script src="JS/jquery.toast.js"></script>

<header style="background-color: #FFE600">
    <nav class="menu" role="navigation">
        <div style="display : flex; flex-direction: row; justify-content: space-between" >

            <div>
                <a href="index.php" class="logo"> Luxury Motorsport </a>     <!-- logo -->
            </div>

            <div> <!-- LES 4 BOUTONS DU HAUT -->
                <a href="catalogue.php" class="m-link">Acheter</a>
                <a href="#" class="m-link">Occasion</a>
                <a href="#" class="m-link">Informations</a>
                <a href="#" class="m-link">Prendre rendez-vous</a>
            </div>


            <div>
                <a href="detailsPanier.php" class="panier-icone"> <i class="fas fa-shopping-cart"></i><span id="panierQte"></span></a>                <!--  PANIER  -->



                <!-- SI ON EST CONNECTÉ : LE BOUTON MENE A MONCOMPTE.PHP SINON LE BOUTON MENE A CONNEXION.PHP -->
                <?php
                if (isset($_SESSION["ID"]))
                {
                ?>
                    <a href="moncompte.php" class="auth"> <i class="fas fa-user"></i></a>
                <?php
                }
                else
                {
                    ?>
                    <a href="connexion.php" class="auth"> <i class="fas fa-user"></i></a>
                    <?php
                }
                ?>

            </div>

        </div>
    </nav>
</header>
<script src="JS/header.js"></script>
<script type="text/javascript">
    refreshCountPanier();
</script>