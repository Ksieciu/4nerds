<?php
    include 'database files/db_connect.php'; 

    $db_conn = new DB_COMMUNICATION();

    if($_POST && isset($_POST) && !empty($_POST)){
        echo "udało się!";
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
    <title>4Nerd.pl - The place where you can be yourself</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
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
                <li class="right-elem"><a href="">Kontakt</a></li>
            </ul>
        </nav>
    </div> 
    <div class="tekst-kontakt">
        <p> Siedziba naszej firmy znajduje się w Józebolestanisłarakowie przy ulicy Pilota Telewizyjnego Karola Plusa 4/20.</p>
        <p>Wypełnij formularz kontaktowy, a my w ciągu 24 godzin odpowiemy!</p><br><br>
    
    

    
    <form id="formularz" method="POST">
        
        <h2>Podaj dane kontaktowe:</h1>
        <label>
            Imie:
            <input type="text" id="name" name="name">
        </label><br>
        <label>
            Nazwisko:
            <input type="text" id="surname" name="surname">
        </label><br>
        <label>
            Email:
            <input type="email" id="email" name="email">
        </label><br>
        <label>
            Treść:
            <textarea type="text" id="text" name="text" col="40" rown="5"></textarea>
        </label><br><br>
        <input type="submit" id="submit" value="Wyslij">
        

    </form></div><br>
    <footer>
    © 2019 by WW Dev - Sebastian Winiarski & Piotr Wroblewski  
   </footer>
    <script src="scripts/navscript.js" async></script>
    <script src="scripts/contact_script.js" async></script>
</body>
</html>