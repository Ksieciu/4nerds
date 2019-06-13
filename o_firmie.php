<?php
    include 'database files/db_connect.php'; 
    $db_conn = new DB_COMMUNICATION();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/navstyle.css">
    <?php $db_conn->show_text("title_text"); ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
    <?php $db_conn->show_text("header"); ?>
    <?php include "navbarV2.php"; ?>

    <div id="text_bg">
        <br>
        <br>
        <div id="text_box">
                <?php 
                $db_conn->show_image("n_image");
                $db_conn->show_text("o_firmie"); 
                ?>
            <br></p></p> 
        </div>
    </div></div>
    <br>
   <br>
    <footer>
    © 2019 by WW Dev - Sebastian Winiarski & Piotr Wroblewski  
   </footer>
            <script src="scripts/navscript.js" async></script>
</body>
</html>