<?php
    include("includes/head.html");
    include("includes/menu.php");

    if(!isset($_REQUEST['id']) || $_REQUEST['id']==""){
        header("location: veureCategories.php");
    }
    ?>

    <h3>PRODUCTE:</h3>
    
    <?php
    
    $url = "https://fakestoreapi.com/products/$_REQUEST[id]";

    $response = file_get_contents($url);

    $product = json_decode($response, true);

    if ($product && is_array($product)) {
        echo "ID: " . $product['id'] . "<br>";
        echo "Nombre: " . $product['title'] . "<br>";
        echo "Precio: $" . $product['price'] . "<br>";
        echo "Descripción: " . $product['description'] . "<br>";
        echo "Categoria: <a href='veureProductesCategoria.php?categoria=".urlencode($product['category'])."'>" . $product['category'] . "</a><br/>";
        echo "Puntuació: " . $product['rating']['rate'] . " (". $product['rating']['count'] . ")<br/>";
        echo "<img src='$product[image]' width='200'><br/>";
        echo "<hr>";
    } else {
        echo "Error al obtener los datos de la API.";
    }

    include("includes/foot.html");
?>