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

<div style="width: 100%; margin : auto; padding-bottom: 30px; padding-top: 30px">
    <div style="display:flex">
        <?php
        $sql="SELECT  * FROM  voitures  ORDER BY prix";

        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
            ?>

            <div class="uno">
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
                    prix : <?php echo $row["prix"] ?><br/>
                    places : <?php echo $row["places"] ?><br/>
                    type : <?php echo $row["type"] ?><br/>
                    <a href="detailsVoiture.php?id=<?php echo $row["id"] ?>">plus d'info</a>
                </div>
            </div>

        <?php


        }


        ?>


        <div class="uno">
            <div>
                <img src="img/turvoi/lambouracan.jpg" alt="Norway" style="width:100%">
                lamborghini huracan <br/>
                puissance : 610ch<br/>
                prix : 180000€<br/>
                places : 2<br/>
                type : coupe<br/>
                <a href="lambouracan.php">plus d'info</a>
            </div>
        </div>
        <div class="uno">
        <div>
            <img src="img/turvoi/mercogts.jpg" alt="Norway" style="width:100%">
            Mercedes AMG GT S <br/>
            puissance : 510ch<br/>
            prix : 175000€<br/>
            places : 2<br/>
            type : COUPE<br/>
            <a href="mercogts.php">plus d'info</a>
        </div>
    </div>
        <br> <br>





    </div>


    <br> <br>
    <div style="width: 100%; margin : auto; padding-bottom: 30px; padding-top: 30px">
        <div style="display:flex">

        </div>
</div>
<!--footer -->
<?php
require_once("footer.php");
?>


</body>


</html>