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
    <title>4Nerd.pl - The place where you can be yourself</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
    <header>Zadzwon do nas: 794 506 899 albo napisz <a href="mailto:kontakt@4nerds.pl">kontakt@4nerds.pl</a></header>
    <!-- robimy navbar i dodajemy w style placeholder by zawartość strony nie zmieniala swojej kompozycji - trzeba będzie to jeszcze dostosować, ale działa nieźle -->
   <div id="logo-area"> <img src="images/logobig.png" alt="4Nerds.pl" id="banner-logo"></div>
    <div class="nav-place" style="height:height()">
        <nav class="stick-nav">
            <ul class="nav-elements">
            <li><a href="main_page.html">Home</a></li>
                <li><a href="o firmie.html">O Firmie</a></li>
                <li><a href="gallery.php">Galeria</a></li>
                <li><a href="produkty.html">Produkty</a></li>
                <li class="right-elem"><a href="contact_page.php">Kontakt</a></li>
            </ul>
        </nav>
    </div>
<div id="text_bg">   
    <br>     
    <div class="gallery-container">
        <?php
            $db_conn->show_images();
        ?>
    </div>

        <div class="modal">
        <div class="modal-content">
            <span class="close"><img src="images/close.svg" alt="Close"></span>
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