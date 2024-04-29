<?php
    include("../database/database.php");

    $q = "SELECT * FROM usuari WHERE usu_mail='$_REQUEST[usu_mail]' AND usu_contra='$_REQUEST[usu_contra]'";
    //echo $q;
    $resul = mysqli_query($conn, $q);
    if(mysqli_num_rows($resul)==1){ //hi ha un usuari a la BD que coincideix amb les dades del formulari
        session_start();
        $_SESSION['usu_mail']=$_REQUEST['usu_mail'];
        header('location: gestioCategories.php');
    } else {
        header('location: ../frontend/veureCategories.php?error=Accès denegat');
    }
?>