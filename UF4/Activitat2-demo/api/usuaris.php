<?php
    require_once '../database/database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $data = json_decode(file_get_contents('php://input'), true);
        $usu_name = $data['usu_name'];
        $usu_contra = md5($data['usu_contra']);
        $result = mysqli_query($conn, "SELECT * FROM usuari WHERE usu_mail='$usu_name' AND usu_contra='$usu_contra'");

        $usuari = array();
        if(mysqli_num_rows($result)>0){
            //es pot fer servir jwt.io, una llibreria que permet generar tokens seguint un standard (RFC7519).

            //base64_encode: converteix la cadena rebuda fent servir un algoritme que codifica seguint un standard anomenat MIME base64 (es pot codificar i decodificar). Converteix els caràcters rebuts en un format 'llegible' per l'usuari.
            //random_bytes: genera una cadena aleatòria de la longitud indicada. Segurament no és 'llegible', ja que genera bytes aleatoris (pot ser una t, com pot ser una tabulació o un salt de línia).
            $usuari['token']=base64_encode(random_bytes(32));
        }

        header('Content-Type: application/json');
        echo json_encode($usuari);
    }
?>