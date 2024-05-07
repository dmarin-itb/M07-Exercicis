<?php
$url = "https://api101.up.railway.app/book/$_REQUEST[id]";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); //Petició DELETE
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$response = curl_exec($ch);
echo "Response: " . $response . "<br>";

if(curl_errno($ch)) {
    echo 'Error al realitzar la solicitut: ' . curl_error($ch);
} else {
    if($response!=""){
        //faltaria eliminar la variable de sessió del llibre eliminat
        header("location: index.php");
    } else {
        header("location: index.php?error=No s'ha pogut eliminar el book $_REQUEST[id]");
    }
}

curl_close($ch);
?>
