<?php
    include("includes/head.html");
    include("includes/menu.php");
    include("includes/validarSessio.proc.php");

    $url = "https://fakestoreapi.com/products/categories";

    $response = file_get_contents($url);

    $data = json_decode($response);

    if ($data && is_array($data)) {

        ?>
    <h3>CATEGORIA:</h3>
    
    <form action="crearProducte.proc.php" method="GET">
        Títol producte: <input name="title" size="25"/><br/>
        Preu producte: <input type="number" name="price" size="5"/>€<br/>
        Descripció producte: <input name="description" size="50"/><br/>
        Imatge producte: <input type="file" name="image" size="25"/><br/>
        Categoria: <select name="category">
            <?php
                foreach ($data as $category) {
                    echo "<option value='".urlencode($category)."'>" . $category . "</option>";
                }
            ?>
        </select>    
        <br/>
        <input type="submit" value="Enviar"/>
    </form>

    <?php
    } else {
        echo "Error al obtener los datos de la API.";
        header("location: index.php");
    }

    include("includes/foot.html");
?>