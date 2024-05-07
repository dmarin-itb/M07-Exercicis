<?php
    session_start();

    include("includes/validarSessio.proc.php");

    $url = "https://fakestoreapi.com/products";

    $data = array(
        'title' => $_REQUEST['title'],
        'price' => $_REQUEST['price'],
        'description' => $_REQUEST['description'],
        'image' =>$_REQUEST['image'],
        'category' => $_REQUEST['category']
    );

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if(curl_errno($ch)) {
        echo 'Error al realizar la solicitud: ' . curl_error($ch);
    } else {
        $json_response = json_decode($response, true);
        if($json_response!=""){ //si ha anat bé, retorna la id del nou producte, però realment no es fa cap insert. Redirigim a veure els productes de la categoria en qüestió
            $ruta = "veureProductesCategoria.php?categoria=".$_REQUEST['category'];
            header("location: $ruta");
        } else {
            header('location: index.php');
        }
    }

    curl_close($ch);
?>