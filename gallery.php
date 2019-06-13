<?php
    include 'database files/db_connect.php'; 
    $db_conn = new DB_COMMUNICATION();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/gallery_style.css">
    <?php $db_conn->show_text("title_text"); ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
    <?php $db_conn->show_text("header"); ?>
    <?php include "navbarV2.php"; ?>

    <div id="text_bg">   
        <br>     
        <div class="gallery-container">
            <?php
                $db_conn->show_gallery_images();
            ?>
        </div>

            <div class="modal">
            <div class="modal-content">
                <span class="close"><?php $db_conn->show_image("close_button"); ?></span>
                <img class="modal-img">
                <div class="img-name"></div>
                <div class="desc"></div>
            </div>
            </div>
        <br>
        <br>
        <br>
    </div>
   <footer>
    © 2019 by WW Dev - Sebastian Winiarski & Piotr Wroblewski  
   </footer>
    <script src="scripts/navscript.js" async></script>
    <script src="scripts/image_enlarge.js" async></script>
</body>
</html>