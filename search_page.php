


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="css/search_style.css">
    <title>4Nerd.pl - The place where you can be yourself</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<body>
    <!-- navbar -->
    <img src="images/4nerdsbig.jpg" alt="4Nerds.pl" id="banner-logo"><br>
    <div class="nav-place" style="height:height()">
        <nav class="stick-nav">
            <ul class="nav-elements">
                <li><a href="">Home</a></li>
                <li><a href="">Test1</a></li>
                <li><a href="">Test2</a></li>
                <li><a href="">Test3</a></li>
                <li class="right-elem"><a href="">test4</a></li>
            </ul>
        </nav>
    </div> 

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





    <script src="scripts/navscript.js" async></script>
</body>
</html>