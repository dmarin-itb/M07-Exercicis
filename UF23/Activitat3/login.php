<?php
    include("includes/head.html");
    include("includes/menu.php");
    ?>

    <h3>LOGIN:</h3>
    
    <form action="login.proc.php" method="POST">
        Nom usuari: <input name="username" value="mor_2314" size="25"/><br/>
        Password: <input name="password" value="83r5^_" size="25"/><br/>
        <input type="submit" value="Enviar"/>
    </form>

    <?php

    include("includes/foot.html");
?>