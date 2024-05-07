<nav>
    <ul>
        <li><a href="index.php">Pàgina principal</a></li>
        <li><a href="veureBookAleatori.php">Veure book aleatori</a></li>
        <li><a href="crearBook.php">Crear book</a></li>
        <li>Llibres creats:
            <ul>
                <?php
                    session_start();
                    if(isset($_SESSION['id'])){
                        foreach($_SESSION['id'] as $id){
                            echo "<li>$id: <a href='veureBook.php?id=$id'>Veure</a> - <a href='modificarBook.php?id=$id'>Modificar</a> - <a href='eliminarBook.proc.php?id=$id'>Eliminar</a></li>";
                        }
                    }
                ?>
            </ul>
        </li>
    </ul>
</nav>