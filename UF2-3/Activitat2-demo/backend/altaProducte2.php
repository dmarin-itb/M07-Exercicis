<?php
    include("includes/head.html");
    include("../database/database.php");

    $resul = mysqli_query($conn, "SELECT * FROM categoria WHERE cat_id=$_REQUEST[cat_id]");
    $categoria = mysqli_fetch_array($resul);
?>

<form action="altaProducte2.proc.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="cat_id" value="<?php echo $_REQUEST['cat_id']; ?>">
    <table>
    <tr>
            <td>Nom producte:</td>
            <td><input name="pro_nom" size="20"></td>
        </tr>
        <tr>
            <td>Preu producte:</td>
            <td><input type="number" name="pro_preu" size="5" value="10.00" step="0.01">€</td>
        </tr>
        <tr>
            <td>Imatge:</td>
            <td><input type="file" name="pro_imatge" value="imatge"></td>
        </tr>
        <tr>
            <td>Categoria:</td>
            <td><input type="text" size="20" readonly value="<?php echo $categoria['cat_nom']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>

<?php
    include("includes/foot.html");
?>
