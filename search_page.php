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
            <div class='search-back-img'>
                <div class='search-box'>
                    <div class='search-content'>
                        <h3 class="search-text">Znajdź sklep w podanym mieście</h3>

                        <div class='search-container'>
                        <form class='search-form' method='POST' action='search_results.php'>
                            <input type="text" name="city" id="city" placeholder="Wpisz miasto">
                            <!-- poniżej można dodać w button jakiś obrazek svg np. lupę -->
                            <button class="search_submit" type="submit">Szukaj</button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br>
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