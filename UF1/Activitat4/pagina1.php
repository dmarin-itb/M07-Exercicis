<?php
    include("includes/header.html");
?>

    <h1>PÀGINA 1</h1>
    <form action="formulari.php" method="GET">
        <table>
            <tr>
                <td><label for="nom">Nom</label></td>
                <td><input id="nom" name="nom" type="text" size="20"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
    
<?php
    include("includes/footer.html");
?>