<?php
    $url = "http://localhost/M07-Exercicis-i-demos/UF4/Activitat2-demo/api/usuaris.php";

    $usu_name = $_REQUEST['usu_mail'];
    $usu_contra = $_REQUEST['usu_contra'];

    $data = array(
        'usu_name' => $usu_name,
        'usu_contra' => $usu_contra
    );

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if(curl_errno($ch)) {
        echo 'Error al realizar la solicitud: ' . curl_error($ch);
    } else {
        $json_response = json_decode($response, true);

        if($json_response && is_array($json_response)){
            session_start();
            $_SESSION['token'] = $json_response['token'];
            header('location: index.php');
        } else {
            header('location: index.php');
        }
       
    }

    curl_close($ch);
?>