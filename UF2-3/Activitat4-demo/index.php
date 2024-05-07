<?php
    include("includes/head.html");
    include("includes/menu.php");
?>

<h2>Exemple de consum d'una API externa</h2>
<h4><a href="https://www.postman.com/postman/workspace/postman-student-api-101-workshop/documentation/13935790-3246e804-99c9-444e-8248-59da3f9f6122?entity=request-13935790-132fc1bb-c474-4764-ba0d-2b999a2c626c" target="_BLANK">Postman Student API</a></h4>

<?php
    if(isset($_REQUEST['error'])){
        echo "<h2>ERROR:</H2>";
        echo "<h3>" . $_REQUEST['error'] . "</h3>";
    }

    include("includes/foot.html");
?>