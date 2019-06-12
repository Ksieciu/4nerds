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
                <img src="images/n-photo.jpg" id="nerd">
                <h1>Firma założona została w 2017 roku, w Poznaniu, jej założycielami są dwa najtęższe mózgi tej strony świata.</h1>
                        <p>Sebastian Winiarski, specjalista od liczb, tęgi umysł technologiczny oraz twardo stąpający po ziemi przedsiębiorca. Osoba uznawana za mistrza od załatwiania spraw nie do załatwienia, sympatyk ziołolecznictwa, altruista, jedyna osoba, na świecie która zdołała ukończyć TES: Oblivion bez zamykania żadnej z bram, betatester Half-Life’a 3. Jego osiągnięcia są tak rozległe, że są widoczne z obity około ziemskiej; z niepotwierdzonych informacji wynika, że Robert Downey Jr kreował postać Tonego Starka wzorując się właśnie na Sebastianie Winiarskim.</p>
                        <p>Drugim założycielem, współtwórcą idei 4nerds.pl jest Piotr Wróblewski. Wybitny mówca, menadżer, wizjoner, człowiek renesansu. Osoba o niesamowitej charyzmie oraz wewnętrznej werwie, ponoć potrafi wygrać dyskusje nie biorąc w jej udziału. Sylwetkowy dubler Chrisa Hemswortha w Avengers – Endgame.</p>
                        <p>Z połączenia dwóch tak tęgich umysłów, w roku 2017 powstała idea a następnie prężny start-up, który do dziś odnosi sukcesy na rynku lokalnym i międzynarodowym.</p>
    
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