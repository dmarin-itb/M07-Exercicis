<?php
    session_start();

    if(!isset($_SESSION['usu_nom'])) header("location: error.php?error=Sessió no iniciada");
?>