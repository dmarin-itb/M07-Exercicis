<?php
    include("../database/database.php");

    $q = "DELETE FROM producte WHERE pro_id=$_REQUEST[pro_id]";
    //echo $q;
    if(mysqli_query($conn, $q)){
        header("location: gestioProductes.php?cat_id=$_REQUEST[cat_id]");
    } else {
        echo "ERROR!";//o redirecció a pàgina d'error
    }
    
    mysqli_close($conn);
?>
