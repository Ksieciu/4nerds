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
</head>
<body>
    <header>Zadzwon do nas: 794 506 899 albo napisz <a href="mailto:kontakt@4nerds.pl">kontakt@4nerds.pl</a></header>
    <!-- robimy navbar i dodajemy w style placeholder by zawartość strony nie zmieniala swojej kompozycji - trzeba będzie to jeszcze dostosować, ale działa nieźle -->
   <div id="logo-area"> <img src="images/logobig.png" alt="4Nerds.pl" id="banner-logo"></div>
    <div class="nav-place" style="height:height()">
        <nav class="stick-nav">
            <ul class="nav-elements">
                <li><a href="main_page.html">Home</a></li>
                <li><a href="">O Firmie</a></li>
                <li><a href="">Galeria</a></li>
                <li><a href="">Produkty</a></li>
                <li class="right-elem"><a href="contact_page.php">Kontakt</a></li>
            </ul>
        </nav>
    </div>

    <div class="gallery-container">
        <?php
            $db_conn->show_images();
        ?>

    </div>

   <footer>
    © 2019 by WW Dev - Sebastian Winiarski & Piotr Wroblewski  
   </footer>
    <script src="scripts/navscript.js" async></script>
</body>
</html>