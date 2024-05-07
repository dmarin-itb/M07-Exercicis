<?php
    include("../database/database.php");

    $q = "INSERT INTO producte (pro_nom, pro_preu, cat_id) VALUES ('$_REQUEST[pro_nom]', '$_REQUEST[pro_preu]', $_REQUEST[cat_id])";
    //echo $q;
    if(mysqli_query($conn, $q)){
        header("location: gestioProductes.php?cat_id=$_REQUEST[cat_id]");
    } else {
        echo "ERROR!";//o redirecció a pàgina d'error
    }
    
    mysqli_close($conn);
?>
