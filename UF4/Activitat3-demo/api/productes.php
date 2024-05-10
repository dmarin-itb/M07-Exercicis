<?php
    /*
    API REST per a la taula categoria:
    Mètodes:
        - GET
        - GET amb cat_id
        - POST amb cat_id
        - PUT amb pro_id
        - DELETE amb pro_id
    Es podria afegir un GET amb pro_id, per retornar totes les dades d'un sol producte
    */

    require_once '../database/database.php';

    // Obtenir tots els productes
    if ($_SERVER['REQUEST_METHOD'] == 'GET' & !isset($_GET['cat_id'])) {
        $result = mysqli_query($conn, "SELECT * FROM producte");
        $producte = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $productes[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($productes);
    }

    // Obtenir tots els productes d'una categoria
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['cat_id'])) {
        $id = $_GET['cat_id'];
        $result = mysqli_query($conn, "SELECT * FROM producte WHERE cat_id=$id");
        $productes = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $productes[] = $row;
        }
        header('Content-Type: application/json');
        echo json_encode($productes);
    }

    // Crear un nou producte
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['cat_id'])) {
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $_GET['cat_id'];
        $nom = $data['pro_nom'];
        $preu = $data['pro_preu'];
        $q = "INSERT INTO producte (pro_nom, pro_preu, cat_id) VALUES ('$nom', '$preu', $id)";
        $result = mysqli_query($conn, $q);
        if ($result) {
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error');
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    // Actualitzar un producte per la ID
    if ($_SERVER['REQUEST_METHOD'] == 'PUT' && isset($_GET['pro_id'])) {
        $id = $_GET['id'];
        $data = json_decode(file_get_contents('php://input'), true);
        $nom = $data['pro_nom'];
        $preu = $data['pro_preu'];
        $result = mysqli_query($conn, "UPDATE producte SET pro_nom='$ nom', pro_preu='$preu' WHERE pro_id=$id");
        if ($result) {
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error');
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    // Eliminar un producte per la ID
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE' && isset($_GET['pro_id'])) {
        $id = $_GET['pro_id'];
        $result = mysqli_query($conn, "DELETE FROM producte WHERE pro_id=$id");
        if ($result) {
            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error');
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
?>
