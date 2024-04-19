<?php
    include("../database/database.php");
    //include("sessions/validarSessio.php");

    $q = "SELECT * FROM usuari WHERE usu_nom='$_REQUEST[usu_nom]'";
    $resul = mysqli_query($conn, $q);
    if(mysqli_num_rows($resul)>0) header("location: error.php?error=Nom d'usuari existent");

    $usuPasswordmd5 = md5($_REQUEST['usu_password']);

    $q = "INSERT INTO usuari(usu_nom, usu_password, usu_nivell) VALUES ('$_REQUEST[usu_nom]', '$usuPasswordmd5', '$_REQUEST[usu_nivell]')";
    echo "·$q·";
    $resul = mysqli_query($conn, $q);

    if(mysqli_affected_rows($conn)>0){
        header("location: gestioUsuaris.php");
    } else {
        header("location: error.php?error=L'usuari no s'ha pogut crear");
    }
?>