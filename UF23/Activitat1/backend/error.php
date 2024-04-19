<?php
    include("../database/database.php");
    include("includes/head.html");
    include("includes/informacioUsuari.php");

    if($_REQUEST['error']) $error = $_REQUEST['error'];
    else $error = "Error desconegut!";
?>

<table>
    <tr>
        <td>ERROR:</td>
        <?php
            echo "<td>$error</td>";
        ?>
    </tr>
</table>

<?php
    include("includes/foot.html");
?>
