<!--
Web que mostra la taula de multiplicar del 7: (exercici03.php)
-->
<html>
    <head>
        <title>Activitat 1 - Exercici 03</title>
    </head>
    <body>
        <h2>Taula del 7</h2>
        <?php

            for($num=0;$num<=10;$num++){
                echo "7x" . $num . "=" . 7*$num . "<br/>";
            }

        ?>

    </body>
</html>