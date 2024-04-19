<?php
    if(isset($_REQUEST['numeroMagic'])){
        $numeroMagic = $_REQUEST['numeroMagic'];
        $numeroJugador = $_REQUEST['numeroJugador'];

        $encertat = false;
        if($numeroMagic==$numeroJugador){
            $missatge = "L'HAS ENCERTAT!!";
            $encertat = true;
        } elseif ($numeroMagic>$numeroJugador) $missatge = "NO! És major";
        else $missatge = "NO! És menor";
    } else {
        $numeroMagic = rand(0,10);
    }
?>
<html>
    <head>
        <title>Número Màgic!!</title>
        <link rel="stylesheet" href="estils.css"/>
    </head>
    <body>
        <form action="numeroMagic.php" method="POST">
            <input type="hidden" name="numeroMagic" value="<?php echo $numeroMagic; ?>"/>
            <div class="form">
                <?php
                if(!$encertat){
                    ?>
                <div class="titol">Número màgic</div>
                <div class="subtitol">Introdueix un número entre 0 i 10</div>
                <div class="input-container ic1">
                    <input type="text" name="numeroJugador" class="input" max="10"/>
                </div>
                <button type="text" class="submit">JUGAR!</button>
                <?php
                    }
                ?>
                <div class="missatge ic1"><?php echo $missatge; ?></div>
            </div>
        </form>
    </body>
</html>