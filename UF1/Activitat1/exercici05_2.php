<html>
    <head>
    </head>
    <body>

        <?php
            $taula = $_REQUEST['taula'];
            echo "<h1>Taula del $taula</h1>";
            for($i=0; $i<=10; $i++){
                echo $taula . "x" . $i . "=" . $taula*$i . "<br/>";
            }
        ?>
        
        <br/><a href="exercici05.php">Tornar</a>
    </body>
</html>