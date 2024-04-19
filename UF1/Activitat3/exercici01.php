<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activitat 3 - Exercici 01</title>
</head>
<body>
    <?php
        $dades = "";
        $dades.= "<b>Nom: </b>" . $_REQUEST['nom'] . "<br/>";
        $dades.= "<b>Cognoms: </b>" . $_REQUEST['cognoms'] . "<br/>";
        $dades.= "<b>Gènere: </b>" . $_REQUEST['genere'] . "<br/>";
        $dades.= "<b>EMail: </b>" . $_REQUEST['email'] . "<br/>";
        $dades.= "<b>Edat: </b>" . $_REQUEST['edat'] . " anys<br/>";
        $dades.= "<b>Ciutat: </b>" . $_REQUEST['ciutat'] . "<br/>";
        $dades.= "<b>Aficions: </b>";
        foreach($_REQUEST['aficions'] as $aficio){
            $dades.= $aficio . " ";
        }
        $dades.= "<br/>";
        $dades.= "<b>Sobre tu: </b>" . $_REQUEST['sobreTu'] . "<br/>";
        echo $dades;
    ?>
    <br/>
    <a href="exercici01.html">Tornar</a>
</body>
</html>