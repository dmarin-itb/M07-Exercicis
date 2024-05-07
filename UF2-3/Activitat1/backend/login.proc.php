<?php
    //session_start();

    include("../database/database.php");

    $usuPasswordmd5 = md5($_REQUEST['usu_password']);
    $q = "SELECT * FROM usuari WHERE usu_nom='$_REQUEST[usu_nom]' AND usu_password='$usuPasswordmd5'";
    $resul = mysqli_query($conn, $q);

    //hi ha un usuari a la BD que coincideix amb les dades del formulari
    if(mysqli_num_rows($resul)==1){
        $usuari = mysqli_fetch_array($resul);
        if($usuari['usu_nivell']=="admin"){
            //quan fem sessions, afegim la variable de sessió usu_nom
            //$_SESSION['usu_nom']=$_REQUEST['usu_nom'];

            header("location: gestioUsuaris.php");
        } else {
            header("location: error.php?error=Accès denegat per a l'usuari $_REQUEST[usu_nom]");
        }
    } else {
        header("location: error.php?error=Accès denegat!");
    }
?>