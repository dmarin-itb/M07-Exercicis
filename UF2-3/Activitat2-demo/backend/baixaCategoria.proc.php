<?php
    include("../database/database.php");

    $q = "DELETE FROM categoria WHERE cat_id=$_REQUEST[cat_id]";
    //echo $q;
    if(mysqli_query($conn, $q)){
        header("location: gestioCategories.php");
    } else {
        echo "ERROR!";//o redirecció a pàgina d'error
    }
    
    mysqli_close($conn);
?>
