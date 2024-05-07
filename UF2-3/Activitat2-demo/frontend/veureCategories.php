<?php
    include("includes/head.html");
    include("../database/database.php");
?>

<table>
<tr>
    <th>cat_id</th>
    <th>cat_nom</th>
</tr>

<?php
    if(isset($_REQUEST['error'])) echo $_REQUEST['error'];

    $resul = mysqli_query($conn, "SELECT * FROM categoria ORDER BY cat_nom");
    
    while($res = mysqli_fetch_array($resul)){
        echo "<tr><td>$res[cat_id]</td><td><a href='veureProductes.php?cat_id=$res[cat_id]'>$res[cat_nom]</a></td></tr>";
    }
    
    mysqli_close($conn);

    echo "</table>";

    include("includes/foot.html");
?>
