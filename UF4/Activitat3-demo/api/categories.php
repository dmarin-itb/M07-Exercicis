<?php
    /*
    API REST per a la taula categoria:
    Mètodes:
        - GET
        - GET amb cat_id
        - POST
        - PUT amb cat_id
        - DELETE amb cat_id
    */
    require_once '../database/database.php';

//ara que ho faig amb paràmetres a la URL, accedeixo

    // Obtenir totes les categories
    if ($_SERVER['REQUEST_METHOD'] == 'GET' & !isset($_GET['cat_id'])) {
        $result = mysqli_query($conn, "SELECT * FROM categoria");
        $categories = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $categories[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($categories);
    }

    // Obtenir una categoria per la ID
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($cat_id)) {
        $result = mysqli_query($conn, "SELECT * FROM categoria WHERE cat_id=$cat_id");
        $categoria = mysqli_fetch_assoc($result);
        header('Content-Type: application/json');
        echo json_encode($categoria);
    }

    // Crear una nova categoria
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);
        $nom = $data['cat_nom'];
        $result = mysqli_query($conn, "INSERT INTO categoria (cat_nom) VALUES ('$nom')");
        if ($result) {
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error');
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    // Actualitzar una categoria per la ID (cat_id)
    if ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['cat_id'])) {
        $id = $_GET['cat_id'];
        $data = json_decode(file_get_contents('php://input'), true);
        $nom = $data['cat_nom'];
        $result = mysqli_query($conn, "UPDATE categoria SET cat_nom='$nom' WHERE cat_id=$id");
        if ($result) {
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error');
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    // Eliminar una categoria per la ID (cat_id)
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE' && isset($_GET['cat_id'])) {
        $id = $_GET['cat_id'];
        $result = mysqli_query($conn, "DELETE FROM categoria WHERE cat_id=$id");
        if ($result) {
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error');
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
?>