<?php
    include("includes/head.html");
    include("includes/menu.php");
    
    if(!isset($_REQUEST['categoria']) || $_REQUEST['categoria']=="" || $_REQUEST['categoria']=="totes"){
        $url = "https://fakestoreapi.com/products";
        $categoria = "totes";
    } else {
        $url = "https://fakestoreapi.com/products/category/$_REQUEST[categoria]";
        $categoria = $_REQUEST['categoria'];
    }

    ?>

    <h3>PRODUCTES DE LA CATEGORIA - <?php echo $categoria; ?>:</h3>
    
    <?php

    $response = file_get_contents($url);

    $data = json_decode($response, true);

    if ($data && is_array($data)) {
        foreach ($data as $product) {
            echo "Nom: <a href='veureProducte.php?id=$product[id]'>" . $product['title'] . "</a><br>";
            echo "Preu: $" . $product['price'] . "<br>";
            echo "Puntuació: " . $product['rating']['rate'] . "/5 (". $product['rating']['count'] . ")<br/>";
            echo "<img src='$product[image]' width='50'><br/>";
            echo "<hr>";
        }
    } else {
        echo "Error al obtener los datos de la API.";
    }

    include("includes/foot.html");
?>