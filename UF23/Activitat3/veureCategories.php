<?php
    include("includes/head.html");
    include("includes/menu.php");
?>

<h3>CATEGORIES:</h3>

<?php
    $url = "https://fakestoreapi.com/products/categories";

    $response = file_get_contents($url);

    $data = json_decode($response);

    if ($data && is_array($data)) {
        echo "<ul>";
        foreach ($data as $category) {
            echo "<li><a href='veureProductesCategoria.php?categoria=".urlencode($category)."'>" . $category . "</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Error al obtener los datos de la API.";
    }

    include("includes/foot.html");
?>