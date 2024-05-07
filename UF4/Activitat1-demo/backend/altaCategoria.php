<?php
    include("includes/head.html");
?>

<form action="altaCategoria.proc.php" method="GET">
    <table>
        <tr>
            <td>Nom categoria:</td>
            <td><input name="cat_nom" size="20"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>

<?php
    include("includes/foot.html");
?>
