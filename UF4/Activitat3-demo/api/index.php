<?php
    include "../database/database.php";

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    //si la url no acaba en /, li posem
    $darrerCaracter = substr($uri, strlen($uri)-1);
    if($darrerCaracter!="/"){
        $uri.="/";
    }

    $uri = substr($uri, strpos($uri, "index.php/")+10);//podem garantir que la ruta tindrà una barra final, sigui a index.php o no
    //echo "---$uri---<br>";//només tenim el que hi ha a la dreta d'index.php, és a dir, la part de la url que ens interessa

    $uri = explode( '/', $uri);
    $numElementsRuta = count($uri);
    //echo $numElementsRuta."<br>";

    switch($numElementsRuta){
        case 1:
            //no hi ha res
            paginaError();
            break;
        case 2:
            if($uri[0]=="categories"){
                //gestionar /api/index.php/categories/
                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    $result = mysqli_query($conn, "SELECT * FROM categoria");
                    $categories = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                        $categories[] = $row;
                    }
                    header('Content-Type: application/json');
                    echo json_encode($categories);
                }

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
            
            } elseif($uri[0]=="productes"){
                //gestionar /api/index.php/productes/
                $result = mysqli_query($conn, "SELECT * FROM producte");
                $producte = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $productes[] = $row;
                }
                header('Content-Type: application/json');
                echo json_encode($productes);
            } else {
                paginaError();
            }
            break;
        case 3:
            if($uri[0]=="categories"){
                //gestionar /api/index.php/categories/x/
                $result = mysqli_query($conn, "SELECT * FROM producte WHERE cat_id=$uri[1]");
                $productes = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $productes[] = $row;
                }
                header('Content-Type: application/json');
                echo json_encode($productes);
            } elseif($uri[0]=="productes"){
                if($uri[1]=="max"){
                    //gestionar /api/index.php/productes/max/x/
                    $result = mysqli_query($conn, "SELECT * FROM producte WHERE pro_preu<=$uri[2]");
                    $productes = array();
                    while ($row = mysqli_fetch_assoc($result)) {
                        $productes[] = $row;
                    }
                    header('Content-Type: application/json');
                    echo json_encode($productes);            

                } else {
                    //gestionar /api/index.php/productes/x/
                    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                        $result = mysqli_query($conn, "SELECT * FROM producte WHERE pro_id=$uri[1]");
                        $productes = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $productes[] = $row;
                        }
                        header('Content-Type: application/json');
                        echo json_encode($productes);
                    }

                }
            } else {
                paginaError();
            }
            break;
        case 4:
            if($uri[0]=="productes"){

            }
        default:
            paginaError();
     }

function paginaError(){
    header("HTTP/1.1 404 Not Found");
    exit();
}

?>