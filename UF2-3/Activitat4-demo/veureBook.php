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
    $url = "https://api101.up.railway.app/book/$_REQUEST[id]";
    echo "URL d'accès: " . $url . "<br/><br/>";

    $response = file_get_contents($url);

        //el retorn té el format:
    /*
        {
        "id": 639,
        "author": "Zadie Smith",
        "book_name": "Dents blanques",
        "link": "http://whiteteeth.co.uk"
        }
    */

    $data = json_decode($response, true);

    if ($data && is_array($data)) {
        echo "<ul>";
        echo "<li>Id: " . $_REQUEST['id'] . "</li>";
        echo "<li>Author: " . $data['author'] . "</li>";
        echo "<li>Name: " . $data['book_name'] . "</li>";
        echo "<li>Link: <a href='$data[link]'>" . $data['link'] . "</a></li>";
        echo "</ul>";
    } else {
        echo "Error al obtener los datos de la API.";
    }

    include("includes/foot.html");
?>