<?php
    session_start();
    if(isset($_SESSION['token'])){
        echo "<a href='logout.proc.php'>Log out</a><br/><br/>";
        echo "Token: " . $_SESSION['token'];
    } else {
        echo "<a href='login.html'>Log in</a><br/><br/>";
        echo "NO logat";
    }
?>