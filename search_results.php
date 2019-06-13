<?php
    include 'database files/db_connect.php'; 
    $db_conn = new DB_COMMUNICATION();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/kontakt_style.css">
    <?php $db_conn->show_text("title_text"); ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
    <?php $db_conn->show_text("header"); ?>
    <?php include "navbarV2.php"; ?>

    <div id="text_bg">
        <br>
        <br>
            <div id="text_box">
                <div class="shops">
                <!-- łączymy się z bazą danych przez klasę, następnie używamy funkcji do wyświetlenia sklepów z podanego miasta, 
                lub w przypadku podania wartości pustej - wszystkich sklepów -->
                <?php 
                if($_POST && isset($_POST)){
                    $db_conn->show_shops();
                };
                ?>
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
</body>
</html>