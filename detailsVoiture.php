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
    <?php
    $sql="SELECT  * FROM  voitures where id =".$_GET['id'];

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {

    ?>
    <div>

        <?php
        if ( $row["image"]  != '')
        {
            echo '<img src="'.$row["image"].'" title="'.$row["modele"].'" style="width:70%" />';
        }
        else{
            echo '<img src="img/unknown.jpg" alt="Norway" style="width:70%"><br>';
        }
        ?>


        <?php echo $row["marque"]?> <?php echo $row["modele"] ?><br/>
        puissance : <?php echo $row["puissance"] ?><br/>
        cylindre : <?php echo $row["cylindre"] ?><br/>
        prix : <?php echo $row["prix"] ?><br/>
        vitesse max : <?php echo $row["vit_max"] ?><br/>
        places : <?php echo $row["places"] ?><br/>
        type : <?php echo $row["type"] ?><br/>
        transmission : <?php echo $row["transmission"] ?><br/>
        moteur : <?php echo $row["moteur"] ?><br/>

    </div>


        <div style="float:right">
            <!--
            <a href="panier.php?action=ajout&l=LIBELLEPRODUIT&q=QUANTITEPRODUIT&p=PRIXPRODUIT"
               onclick="window.open(this.href, '_blank','scrollbars=yes, resizable=no, width=600, height=600'); return false;">
                Ajouter au panier</a>
                -->

            <a onclick="ajoutPanier(<?php echo $row["id"].',\''.$row["modele"].'\','.$row["prix"] ?>); return false;">
                Ajouter au panier</a>

        </div>


    <?php
    }
    ?>



</div>

<!--footer -->
<?php
require_once("footer.php");
?>

<script type="text/javascript">


    function ajoutPanier(voitureId, prix, modele){
        //ajax pour ne pas recharger toute la page et la rafraichir partiellement
        $.ajax({
            url: 'gestionPanier.php',
            type: 'post',
            data: { "ajoutPanier": voitureId, "prix": prix, "modele": modele},
            success: function(response) {
                //https://www.jqueryscript.net/other/jQuery-Plugin-For-Animated-Stackable-Toast-Messages-Toast.html
                $.toast({
                    text :"Produit ajouté au panier avec succès !",
                    icon: 'success',
                    position: 'top-right'
                });

                refreshCountPanier(); //fonction dans le fichier header.js
            },
            error: function()
            {
                $.toast({
                    text :"Une erreur s'est produite !",
                    icon: 'error',
                    position: 'top-right'
                });
            }
        });
    }

</script>


</body>

</html>