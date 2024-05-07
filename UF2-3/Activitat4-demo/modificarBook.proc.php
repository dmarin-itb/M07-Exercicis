<?php
$url = "https://api101.up.railway.app/book";

$data = array(
    'id' => $_REQUEST['id'],
    'author' => $_REQUEST['author'],
    'book_name' => $_REQUEST['book_name'],
    'link' => $_REQUEST['link']
);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT"); //Petició PUT
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error al realitzar la solicitut: ' . curl_error($ch);
} else {
    $ruta = "veureBook.php?id=" . $_REQUEST['id'];
    header("location: $ruta");
}

curl_close($ch);
?>
