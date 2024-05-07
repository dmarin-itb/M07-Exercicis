<?php
    include("includes/head.html");
    include("../database/database.php");

    $resul = mysqli_query($conn, "SELECT producte.*, categoria.cat_nom FROM producte, categoria WHERE pro_id=$_REQUEST[pro_id] AND producte.cat_id=categoria.cat_id");
    if(mysqli_num_rows($resul)==1){
        $res=mysqli_fetch_array($resul);
        ?>
        <form action="canviProducte.proc.php" method="GET">
        <input type="hidden" name="cat_id" value="<?php echo $res['cat_id']; ?>">
        <input type="hidden" name="pro_id" value="<?php echo $res['pro_id']; ?>">
            <table>
                <tr>
                    <td>Nom producte:</td>
                    <td><input name="pro_nom" size="20" value="<?php echo $res['pro_nom']; ?>"></td>
                </tr>
                <tr>
                    <td>Preu producte:</td>
                    <td><input type="number" name="pro_preu" size="5" value="<?php echo $res['pro_preu']; ?>" step="0.01">€</td>
                </tr>
                <tr>
                    <td>Categoria:</td>
                    <td><input type="text" size="20" readonly value="<?php echo $res['cat_nom']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
        <?php        
    } else {

    }

    include("includes/foot.html");
?>
