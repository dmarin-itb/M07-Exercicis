<nav>
    <?php
        session_start();

        if(isset($_SESSION['token'])){
            echo "Hola usuari, estàs logat (<a href='logout.proc.php'>Logout</a>)<br/><br/>";
            echo "<a href='crearProducte.php'>Nou producte</a><br/>";
        } else
            echo "<a href='login.php'>Login</a><br/><br/>";
    ?>
</nav>
<br/>
<nav>
    <a href="index.php">Pàgina principal</a> - <a href="veureCategories.php">Veure categories</a> - <a href="veureProductesCategoria.php?categoria=totes">Veure productes</a>
</nav>