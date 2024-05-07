<?php
session_start();    //inicio sessió per poder guardar els ids dels books creats

$url = "https://api101.up.railway.app/book";

// Datos a enviar en la solicitud POST
$data = array(
    'author' => $_REQUEST['author'],
    'book_name' => $_REQUEST['book_name'],
    'link' => $_REQUEST['link']
);

// Inicializar cURL
$ch = curl_init($url);

// Configurar la solicitud
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");    //Petició POST
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Configurar para recibir la respuesta como JSON
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Realizar la solicitud
$response = curl_exec($ch);

// Verificar si hubo errores
if(curl_errno($ch)) {
    echo 'Error al realitzar la solicitut: ' . curl_error($ch);
} else {
    $json_response = json_decode($response, true);
    if($json_response && is_array($json_response)){
        //echo "HA ANAT BÉ!";
        //echo "Resposta: " . $json_response['id'];
        $_SESSION['id'][]=$json_response['id'];
        //$ruta = "veureBook.php?id=" . $json_response['id'];   //redirecció a la pàgina de veureBook per veure el llibre recent afegit
        $ruta = "index.php";
        //echo $ruta;
        header("location: $ruta");
    } else {
        // No ha tornat el nou element, per tant, no s'ha fet l'insert
        //echo "Error, no s'ha pogut donar d'alta el book";
        header("location: index.php?error=No s'ha pogut crear el nou book");
    }
}

curl_close($ch);
?>
