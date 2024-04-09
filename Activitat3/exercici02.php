<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activitat 3 - Exercici 02</title>
</head>
<body>
    <?php
        if(strlen($_REQUEST['text'])>0 && strlen($_REQUEST['paraula'])>0){
            echo "<b>Text: </b>" . $_REQUEST['text'] . "<br/>";
            echo "<b>Paraula: </b>" . $_REQUEST['paraula'] . "<br/><br/>";
            
            echo "<b>Longitud del text: </b>" . strlen($_REQUEST['text']) . "<br/>";
            echo "<b>Longitud de la paraula: </b>" . strlen($_REQUEST['paraula']) . "<br/><br/>";

            echo "<i>" . $_REQUEST['paraula'] . "</i> està " . substr_count($_REQUEST['text'], $_REQUEST['paraula']) . " vegades al text <br/>";

        } else {
            echo "<h2>Has passat contingut que no tocaba!</h2>";
            echo "Longitud del text: " . strlen($_REQUEST['text']) . "<br/>";
            echo "Longitud de la paraula: " . strlen($_REQUEST['paraula']) . "<br/>";
        }

    ?>
</body>
</html>