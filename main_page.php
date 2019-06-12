<?php
    include 'database files/db_connect.php'; 
    $db_conn = new DB_COMMUNICATION();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/navstyle.css">
    
    <title>4Nerd.pl - The place where you can be yourself</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
    <header>Zadzwon do nas: 794 506 899 albo napisz <a href="mailto:kontakt@4nerds.pl">kontakt@4nerds.pl</a></header>
    <!-- robimy navbar i dodajemy w style placeholder by zawartość strony nie zmieniala swojej kompozycji - trzeba będzie to jeszcze dostosować, ale działa nieźle -->
    <?php include "navbarV2.php"; ?>
     <div id="text_bg">
         <br>
         <br>
         <div id="text_box">
                <img src="images/nerd-photo.png" id="nerd">
             <h1>Witajcie w 4nerds.pl - miejscu w którym zawsze możesz być sobą!</h1>
    <p>     4nerds.pl powstało z myślą o połączeniu pasji do nauki, komiksów, filmów i gier planszowych z pracą zarobkowa.
          Z pasją oraz duma szerzymy na terenie kraju szeroko pojętą kultur nerdowska poprzez sprzedaż komiksów, gier oraz nerdowski gadżetów. W swoim asortymencie posiadamy wysokiej jakości, wyselekcjonowany towar krajowy, jak i kolekcjonerskie importowane perełki. 
            </p>  <p>Jako pasjonaci, z wieloletnim doświadczeniem, prowadzimy także wiele eventów na terenie całego kraju, nasze stanowiska najdziecie między innymi na festiwalach takich jak Pyrkon, Polcon czy Comic Con.
            W życiu i biznesie kierujemy się zasadą, że bycie sobą w każdej sytuacji to podstawa, dlatego 4nerds.pl to miejsce, w którym zawsze możesz być sobą!<br>
        <br><br>
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