<?php
    session_start();
    if(!isset($_SESSION['usu_mail'])){
        session_destroy();
        header('location: ../frontend/veureCategories.php?error=Has de logarte per entrar a l\'espai personal!');
    } else {
        include("includes/head.html");
        echo "user: <strong>" . $_SESSION['usu_mail'] . "</strong>";
        include("../database/database.php");
    ?>

    <table>
    <tr>
        <th>cat_id</th>
        <th>cat_nom</th>
        <th colspan="2">operacions</th>
    </tr>

    <?php

        $resul = mysqli_query($conn, "SELECT * FROM categoria ORDER BY cat_nom");
        
        while($res = mysqli_fetch_array($resul)){
            echo "<tr>
            <td>$res[cat_id]</td>
            <td><a href='gestioProductes.php?cat_id=$res[cat_id]'>$res[cat_nom]</a></td>
            <td><a href='canviCategoria.php?cat_id=$res[cat_id]'>Modificar</a></td>
            <td><a href='baixaCategoria.proc.php?cat_id=$res[cat_id]'>Eliminar</a></td>
            </tr>";
        }
        echo "<tr><td colspan='4'><a href='altaCategoria.php'>Insertar</a></td></tr>";
        mysqli_close($conn);

        echo "</table>";

        include("includes/foot.html");
    }//final else sessió
?>
