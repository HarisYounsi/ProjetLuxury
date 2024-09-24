<?php
session_start();
require_once("db.php");
?>

<?php
    session_start();
    session_destroy();
    header('Location: deconnexion.php');
    exit;
?>

<!--
On détruit la session (donc on déconnecte l'utilisateur)
et on redirige l'utilisateur vers la page déconexion.php qui
indique seulement qu'on a été déconnecté mais on aurai pu aussi
rediriger vers connexion.php ou index.php
-->
