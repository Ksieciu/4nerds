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
                <a href="komiksy.php"> <img src="images/komiksy.JPG" id="wide-pics"></a>
                <br>
                <a href="ubrania.php"> <img src="images/ubrania.jpg" id="wide-pics"></a>
                <br>
                <a href="eventy.php"><img src="images/eventy.jpg" id="wide-pics"></a>
                <br>
              
    
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