<?php
session_start();
require_once("db.php");

if (count($_POST) > 0) {
    $Prenom = $_POST["prenom"]; // prend depuis inscription ce quon a écrit dans la case prenom
    $Nom = $_POST["nom"];   //pareil
    $Email = $_POST["email"]; //pareil
    $Motdepasse = $_POST["mdp1"]; //pareil
    $ddn = $_POST["ddn"]; //pareil
    $gender = $_POST["gender"]; //pareil
    $sql = "INSERT INTO utilisateurs VALUES (NULL, '" . $Prenom . "','" . $Nom . "','" . $Email . "','" . $Motdepasse . "','" . $ddn . "','".$gender ."','N' )";
    // ENTREZ DANS LA TABLE UTILISATEURS LES VALEURS SUIVANTES : NULL(id) PRENOM NOM EMAIL MDP DATE NAISSANCE ET GENRE

    mysqli_query($conn, $sql);

    header("location:index.php");
    // Va sur la page index une fois inscription terminé

}

