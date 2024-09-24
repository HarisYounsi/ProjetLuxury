<?php
session_start();
require_once("panier.php");
//'gestionPanier.php?action=refreshPanier'
//'gestionPanier.php?action=viderPanier'
function ajoutPanier($voitureId, $prix, $libelle){

    if (!isset($_SESSION['panier'])) //! négation
        $listProduit = []; //[] tableau vide
    else
        $listProduit = unserialize($_SESSION['panier']);//unserialize déserialiser

    foreach($listProduit as $produit) {//foreach : pour chaque element de mon tableau
        if ($voitureId == $produit->produitId) {
            $produit->quantite = $produit->quantite + 1;
            $_SESSION['panier'] = serialize($listProduit);
            return $voitureId+1; //return pour quitter la fonction
        }
    }

    $produit = new panier($voitureId,1, $prix, $libelle);
    //$listProduit = [$produit];

    array_push($listProduit,$produit);//array_push ajoute un élément à un tableau
    $_SESSION['panier'] = serialize($listProduit);
}

function supprimerProduit($produitId)
{

}

function viderPanier()
{
    $_SESSION['panier'] = null;
}

function countPanier()
{
    $resultat = 0;

    if(isset($_SESSION['panier'])) {
        $listProduit = unserialize($_SESSION['panier']);
        if (is_array($listProduit)) { //is_array : vérifie si la variable est un tableau
            for ($i = 0; $i < count($listProduit); $i++) { //count : fonction php qui retourne le nombre d'élément d'un tableau
                $resultat = $resultat + $listProduit[$i]->quantite;
            }
        }
    }
    return $resultat;
}

if (isset($_POST['ajoutPanier'])) {    //isset()Détermine si une variable est affectée
    echo ajoutPanier($_POST['ajoutPanier'], $_POST['prix'], $_POST['modele']);
}
elseif (isset($_GET['action'])){
    switch ($_GET['action']) //switch : selon ce qu'on passe en paramètre dans action
    {
        case 'refreshPanier':
            echo countPanier();
            break;

        case 'supprimerProduit':
            //A termeiner
            break;

        case 'viderPanier':
            echo viderPanier();
            break;
    }
}
?>