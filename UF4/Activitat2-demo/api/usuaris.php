<?php
    // Obtenir un usuari
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['username']) && isset($_GET['password'])) {
        $username = $_GET['username'];
        $password = md5($_GET['password']);
        $result = mysqli_query($conn, "SELECT * FROM usuari WHERE usu_mail='$username' AND usu_contra='$password'");
        $categoria = mysqli_fetch_assoc($result);
        header('Content-Type: application/json');
        echo json_encode($categoria);
    }

?>