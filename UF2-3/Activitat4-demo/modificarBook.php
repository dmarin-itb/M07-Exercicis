<!--
    PÀGINA D'ALTA DE BOOK
-->

<?php
    include("includes/head.html");
    include("includes/menu.php");

    $url = "https://api101.up.railway.app/book/$_REQUEST[id]";

    $response = file_get_contents($url);

    $data = json_decode($response, true);

    if ($data && is_array($data)) { //només hauria de ser un
        ?>
        <h3>MODIFICAR BOOK:</h3>
    
        <form action="modificarBook.proc.php" method="GET">
            <input name="id" size="5" value="<?php echo $data['id']; ?>"><br/>
            Autor: <input name="author" size="25" value="<?php echo $data['author']; ?>"/><br/>
            Títol: <input name="book_name" size="25" value="<?php echo $data['book_name']; ?>"/><br/>
            Enllaç: <input name="link" size="25" value="<?php echo $data['link']; ?>"/><br/>
            <br/>
            <input type="submit" value="Enviar"/>
        </form>
    
    <?php
    } else {
        echo "Error al obtener les dades de l'API.";
    }

    include("includes/foot.html");
?>