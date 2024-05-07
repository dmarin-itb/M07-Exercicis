<?php
    include("../database/database.php");

    $q = "INSERT INTO categoria (cat_nom) VALUES ('$_REQUEST[cat_nom]')";
    //echo $q;
    if(mysqli_query($conn, $q)){
        header("location: gestioCategories.php");
    } else {
        echo "ERROR!";//o redirecció a pàgina d'error
    }
    
    mysqli_close($conn);
?>
