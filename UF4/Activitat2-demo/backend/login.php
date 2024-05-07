<?php
    include("includes/head.html");
?>

<form action="login.proc.php" method="GET">
    <table>
    <tr>
            <td>Mail usuari:</td>
            <td><input name="usu_mail" size="20"></td>
        </tr>
        <tr>
            <td>Paraula clau:</td>
            <td><input name="usu_contra" size="20"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>

<?php
    include("includes/foot.html");
?>
