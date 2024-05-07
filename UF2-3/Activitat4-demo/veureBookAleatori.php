<!--
    PÀGINA QUE MOSTRA UN BOOK, JA QUE L'API NOMÉS RETORNA UN ALEATÒRIAMENT
-->

<?php
    //include("includes/validarSessio.proc.php");
    include("includes/head.html");
    include("includes/menu.php");
?>

<h3>RANDOM BOOK:</h3>

<?php
    $url = "https://api101.up.railway.app/book";

    $response = file_get_contents($url);

    //el retorn té el format:
    /*
        [
        {
            "id": 2,
            "author": "Walter Isaacson",
            "book_name": "Steve Jobs",
            "link": "https://g.co/kgs/o8xgGr"
        }
        ]
    */

    $data = json_decode($response, true);

    if ($data && is_array($data)) {
        echo "<ul>";
        foreach ($data as $book) {
            echo "<li>Author: " . $book['author'] . "</li>";
            echo "<li>Name: " . $book['book_name'] . "</li>";
            echo "<li>Link: <a href='$book[link]'" . $book['link'] . "</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Error al obtener los datos de la API.";
    }

    include("includes/foot.html");
?>