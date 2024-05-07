<?php
    include("../database/database.php");

    $q = "UPDATE producte SET pro_nom='$_REQUEST[pro_nom]', pro_preu='$_REQUEST[pro_preu]' WHERE pro_id=$_REQUEST[pro_id]";
    //echo $q;
    if(mysqli_query($conn, $q)){
        header("location: gestioProductes.php?cat_id=$_REQUEST[cat_id]");
    } else {
        echo "ERROR!";//o redirecció a pàgina d'error
    }
    
    mysqli_close($conn);
?>
