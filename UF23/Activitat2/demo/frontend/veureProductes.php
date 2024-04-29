<?php
    include("includes/head.html");
    include("../database/database.php");
?>

<table>
<tr>
    <th>pro_id</th>
    <th>pro_nom</th>
    <th>pro_preu</th>
</tr>

<?php
    $q = "SELECT * FROM producte WHERE cat_id=$_REQUEST[cat_id]";
    $resul = mysqli_query($conn, $q);
    if(mysqli_num_rows($resul)>0){    
        while($res = mysqli_fetch_array($resul)){
            echo "<tr><td>$res[pro_id]</td><td>$res[pro_nom]</td><td>$res[pro_preu]€</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'><strong>NO HI HA RESULTATS A MOSTRAR!</strong></td></tr>";
    }
    
    mysqli_close($conn);

    echo "</table>";

    include("includes/foot.html");
?>
