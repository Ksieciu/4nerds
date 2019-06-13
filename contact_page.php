<?php
    include 'database files/db_connect.php'; 

    $db_conn = new DB_COMMUNICATION();

    if($_POST && isset($_POST) && !empty($_POST)){
        $db_conn->contact_info_add();
        header('Location: contact_page.php');
    };

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
        <div class="tekst-kontakt">
            <div id="text_box">
            <?php $db_conn->show_text("contact_page_opis"); ?>
            </div>
        <br>
        <br>

        <form id="formularz" method="POST">
            
            <h1>Podaj dane kontaktowe:</h1>
            <label>
            <h1> Imie:</h1>
                <input type="text" id="name" name="name" required placeholder="Tutaj wpisz swoje imie">
            </label><br>
            <label>
            <h1> Nazwisko:</h1>
                <input type="text" id="surname" required placeholder="Tutaj wpisz swoje nazwisko" name="surname">
            </label><br>
            <label>
            <h1> Email:</h1>
                <input type="email" id="email"  required placeholder="Tutaj wpisz swoje adres e-mail" name="email">
            </label><br>
            <label>
            <h1> Tresc:</h1>
                <textarea type="text" id="text" name="text"  required placeholder="Podaj treść" col="40" rown="5"></textarea>
            </label><br><br>
            <input type="submit" id="submit" value="Wyslij">
            
        </form><br><br><br>
        </div>
    </div>
    <footer>
    © 2019 by WW Dev - Sebastian Winiarski & Piotr Wroblewski  
   </footer>
    <script src="scripts/navscript.js" async></script>
    <script src="scripts/contact_script.js" async></script>
</body>
</html>