<!--
Web que mostra els números del 100 al 0 fent servir un bucle for, però els números parells en negreta, els senars en cursiva i el 0 en negreta, cursiva i subratllat. (exercici02.php)
-->
<html>
    <head>
        <title>Activitat 1 - Exercici 02</title>
    </head>
    <body>
        <?php

            for($num=100;$num>=0;$num--){
                if($num!=0){
                    if($num%2==0) echo "<b>$num</b>";
                    else echo "<u>$num</u>";
                    echo "<br/>";
                } else
                    echo "<b><u>0</u></b>";
            }

        ?>

    </body>
</html>