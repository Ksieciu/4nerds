


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