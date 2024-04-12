<?php
    session_start();

    if(!isset($_SESSION['bgColor'])) $bgColor = "";
    else $bgColor = $_SESSION['bgColor'];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Pàgina d'includes</title>
        <link rel="shortcut icon" href="images/favicon.png"/>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>

    <body style="background-color:<?php echo $bgColor; ?>">
        <nav>
            <a href="pagina1.php">Pàgina 1</a> <a href="pagina2.php">Pàgina 2</a> <a href="pagina3.php">Pàgina 3</a> <a href="pagina4.php">Configurar fons</a> <a href="pagina5.php">Matar sessió</a> 
        </nav>
        <br/><br/>