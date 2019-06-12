
<?php
    echo '<div class="offset-measure"';
    echo '<div id="logo-area"> <img src="images/logobig.png" alt="4Nerds.pl" id="banner-logo"></div>';
    echo '<div class="nav-place">';
    echo '<nav class="stick-nav">';
    echo '<ul class="nav-elements">';
    $db_conn->show_link("Home");
    $db_conn->show_link("O firmie");
    $db_conn->show_link("Galeria");
    $db_conn->show_link("Produkty");
    $db_conn->show_link("Szukaj sklepu");
    $db_conn->show_link("Kontakt");
    echo '</ul>';
    echo '</nav>';
    echo '</div>'; 
    echo '</div>';
?>