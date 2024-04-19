<!--
Web que mostra els números de l’1 al 10, fent que cada número sigui un hipervincle a la pàgina corresponent de la Vikipèdia: (exercici04.php)
-->
<html>
    <head>
        <title>Activitat 1 - Exercici 04</title>
    </head>
    <body>
        <?php

            for($num=1;$num<=10;$num++){
                echo "<a href='https://es.wikipedia.org/wiki/$num'>https://es.wikipedia.org/wiki/$num</a><br/>";
            }

        ?>

    </body>
</html>