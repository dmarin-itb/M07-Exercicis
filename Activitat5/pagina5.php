<?php
    session_start();

    session_unset();

    session_destroy();

    header('location: pagina1.php')
?>