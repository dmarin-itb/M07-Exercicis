<?php
    include("includes/head.html");
    include("../database/database.php");

    $resul = mysqli_query($conn, "SELECT * FROM categoria WHERE cat_id=$_REQUEST[cat_id]");
    if(mysqli_num_rows($resul)==1){
        $res=mysqli_fetch_array($resul);
        ?>
        <form action="canviCategoria.proc.php" method="GET">
            <input type="hidden" name="cat_id" value="<?php echo $res['cat_id']; ?>">
            <table>
                <tr>
                    <td>Nom categoria:</td>
                    <td><input name="cat_nom" size="20" value="<?php echo $res['cat_nom']; ?>"></td>
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
