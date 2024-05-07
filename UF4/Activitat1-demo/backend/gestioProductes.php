<?php
    session_start();
    if(!isset($_SESSION['usu_mail'])){
        session_destroy();
        header('location: ../frontend/veureCategories.php?error=Has de logarte per entrar a l\'espai personal!');
    } else {
        include("includes/head.html");
        echo "user: <strong>" . $_SESSION['usu_mail'] . "</strong><br>";
        include("../database/database.php");
    ?>

    <table>
    <tr>
        <th>pro_id</th>
        <th>pro_nom</th>
        <th>pro_preu</th>
        <th colspan="2">operacions</th>
    </tr>

    <?php

        $resul = mysqli_query($conn, "SELECT * FROM producte WHERE cat_id=$_REQUEST[cat_id] ORDER BY pro_nom");
        
        while($res = mysqli_fetch_array($resul)){
            echo "<tr>
            <td>$res[pro_id]</td>
            <td>$res[pro_nom]</a></td>
            <td>$res[pro_preu]€</a></td>
            <td><a href='canviProducte.php?pro_id=$res[pro_id]&cat_id=$_REQUEST[cat_id]'>Modificar</a></td>
            <td><a href='baixaProducte.proc.php?pro_id=$res[pro_id]&cat_id=$_REQUEST[cat_id]'>Eliminar</a></td>
            </tr>";
        }
        echo "<tr><td colspan='5'><a href='altaProducte.php?cat_id=$_REQUEST[cat_id]'>Insertar</a></td></tr>";
        mysqli_close($conn);

        echo "</table>";

        include("includes/foot.html");
    }//final else sessió
?>
