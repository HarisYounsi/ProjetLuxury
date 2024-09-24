<?php
session_start();
require_once("db.php");
include_once("fonctions-panier.php");
require_once("panier.php");



$erreur = false;
/*
if($action !== null)
{
    if(!in_array($action,array('ajout', 'suppression', 'refresh')))
        $erreur=true;

    //récupération des variables en POST ou GET
    $l = (isset($_GET['l'])? $_GET['l']:null ) ;
    $p = (isset($_GET['p'])? $_GET['p']:null ) ;
    $q = (isset($_GET['q'])? $_GET['q']:null ) ;

    //Suppression des espaces verticaux
    $l = preg_replace('#\v#', '',$l);
    //On vérifie que $p est un float
    $p = floatval($p);

    //On traite $q qui peut être un entier simple ou un tableau d'entiers

    if (is_array($q)){
        $QteArticle = array();
        $i=0;
        foreach ($q as $contenu){
            $QteArticle[$i++] = intval($contenu);
        }
    }
    else
        $q = intval($q);

}

if (!$erreur){
    switch($action){
        Case "ajout":
            ajouterArticle($l,$q,$p);
            break;

        Case "suppression":
            supprimerArticle($l);
            break;

        Case "refresh" :
            for ($i = 0 ; $i < count($QteArticle) ; $i++)
            {
                modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
            }
            break;

        Default:
            break;
    }
}
*/
echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
    <title>Votre panier</title>
    <meta charset="utf8"/>
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/lestyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body class="body">
<!-- header -->
<?php
require_once("header.php");
?>


<div style="width: 65%; margin : auto; padding-bottom: 30px; padding-top: 30px ">
    <form method="post" action="panier.php">

        <?php
        $listProduit = unserialize($_SESSION['panier']);
        if(is_array($listProduit)) {
            ?>
            <div id="detailsPanier">
                <table style="width: 100%">
                    <tr>
                        <td colspan="4">Votre panier</td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($listProduit); $i++) { //count : fonction php qui retourne le nombre d'élément d'un tableau
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($listProduit[$i]->libelle) . "</ td>";
                        echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"" . htmlspecialchars($listProduit[$i]->quantite) . "\"/></td>";
                        echo "<td>" . htmlspecialchars($listProduit[$i]->prix) . "</td>";
                        echo "<td><a href=\"" . htmlspecialchars("panier.php?action=suppression&l=" . rawurlencode($listProduit[$i]->quantite)) . "\">XX</a></td>";
                        echo "</tr>";
                    }


                    ?>
                </table>

            </div>
            <div id="detailsPanierVide" style="display:none"> panier vide </div>
            <?php
        }
        else echo "<div id='detailsPanierVide'> panier vide </div>";
        ?>
    </form>
</body>
<script type="text/javascript">
    function viderPanier()
    {
        $.ajax({
            url: 'gestionPanier.php?action=viderPanier',
            type: 'get',
            success: function(response) {
                //$('#panierQte').text(response);//# = recherche par id   //. recherche par classe css

                $.toast({
                    text :"OK!",
                    icon: 'success',
                    position: 'top-right'
                });
                $("#detailsPanier").empty();
                $("#detailsPanierVide").show();
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
</html>