<?php
    include 'database files/db_connect.php'; 
    $db_conn = new DB_COMMUNICATION();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/landing.css">
    <title>4Nerd.pl - The place where you can be yourself</title>
    <!--Dodajemy favicon zgodny z indentyfikacja wizualna-->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
</head>
<body>
<div id="body_background">
    <?php $db_conn->show_image("landing_logo"); ?>
</div>
 <script src="scripts/landing.js" async></script>
 
    </body>
</html>