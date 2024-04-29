<?php
    include("../database/database.php");

    $nom = $_FILES['pro_imatge']['name'];
    $desti = "imatgesProductes/";
    if(move_uploaded_file($_FILES['pro_imatge']['tmp_name'], $desti.$nom)){
        $q = "INSERT INTO producte (pro_nom, pro_preu, cat_id) VALUES ('$_REQUEST[pro_nom]', '$_REQUEST[pro_preu]', $_REQUEST[cat_id])";
        //echo $q;
        if(mysqli_query($conn, $q)){
            $darrerId=mysqli_insert_id($conn);
            $q = "UPDATE producte SET pro_imatge='$nom' WHERE pro_id=$darrerId";
            //echo $q;
            if(mysqli_query($conn, $q)){
                header("location: gestioProductes.php?cat_id=$_REQUEST[cat_id]");
            } else {
                echo "ERROR!";//o redirecció a pàgina d'error
            }
        } else {
            echo "error en la pujada!";
        }   
    } else {
        echo "error en la pujada!";
    }    
    mysqli_close($conn);
?>
