<!--
    PÀGINA D'ALTA DE BOOK
-->

<?php
    include("includes/head.html");
    include("includes/menu.php");
?>

<h3>CREAR BOOK:</h3>
    
<form action="crearBook.proc.php" method="GET">
    Autor: <input name="author" size="25"/><br/>
    Títol: <input name="book_name" size="25"/><br/>
    Enllaç: <input name="link" size="25"/><br/>
    <br/>
    <input type="submit" value="Enviar"/>
</form>

<?php
    include("includes/foot.html");
?>