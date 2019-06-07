<?php
    include 'database files/db_connect.php'; 
?>


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

    <div class="shops">
        <!-- łączymy się z bazą danych przez klasę, następnie używamy funkcji do wyświetlenia sklepów z podanego miasta, 
        lub w przypadku podania wartości pustej - wszystkich sklepów -->
        <?php 
            $db_conn = new DB_COMMUNICATION();

            if($_POST && isset($_POST)){
                $db_conn->show_shops();
            };
        ?>
    </div>

    <script src="scripts/navscript.js" async></script>
</body>
</html>