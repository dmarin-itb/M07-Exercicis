<?php
    session_start();

    if(isset($_REQUEST['color'])){
        $_SESSION['bgColor'] = $_REQUEST['color'];
    }
    
    include("includes/header.php");
?>

    <h1>PÀGINA 4</h1>
    <div id="container">
        <h1>Tria quin color de fons vols definir</h1>
        <form action="">
            <input type="radio" id="red" name="color" value="#f18888"><label for="red" class="red"></label>
            <input type="radio" id="green" name="color" value="#68fa6f"><label for="green" class="green"></label>
            <input type="radio" id="blue" name="color" value="#90aff1"><label for="blue" class="blue"></label>
            <input type="radio" id="yellow" name="color" value="#def369"><label for="yellow" class="yellow"></label>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>

<?php
    include("includes/footer.html");
?>
