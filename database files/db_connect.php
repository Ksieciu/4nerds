<?php

//klasa służąca połączeniom i operacjom związanych z bazą danych
class DB_COMMUNICATION{

    private $pdo;
    public $dns;
    private $db_host = 'hosting1947235.online.pro';
    private $db_name = '00231786_4nerds';
    private $db_user = '00231786_4nerds';
    private $db_pass = '6=cz68QvV9';

    //konstruktor przypisujący odpowiednie wartości do zmiennych obiektu potrzebnych do połączenia z bazą danych
    public function __construct(){
        try{
            $db_host = $this->db_host;
            $db_name = $this->db_name;
            $db_user = $this->db_user;
            $db_pass = $this->db_pass;
            $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ";charset=utf8";
            $pdo = new PDO($dsn, $db_user, $db_pass);
            $this->pdo = $pdo; 

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    //funkcja dodająca do bazy danych informacje z formularza kontaktowego podanego przez użytkownika
    public function contact_info_add(){
        $pdo = $this->pdo;
        $post_name = filter_input(INPUT_POST, 'name');
        $post_surname = filter_input(INPUT_POST, 'surname');
        $post_email = filter_input(INPUT_POST, 'email');
        $post_text = filter_input(INPUT_POST, 'text');

        if(!empty($post_name) && !empty($post_surname) && !empty($post_email) && !empty($post_text)){
            $results = $pdo->prepare('INSERT INTO kontakt (ID, name, surname, email, text) VALUES (DEFAULT, :name, :surname, :email, :text)');
            $results->bindParam(':name', $post_name);
            $results->bindParam(':surname', $post_surname);
            $results->bindParam(':email', $post_email);
            $results->bindParam(':text', $post_text);
            $results->execute();
        }
    }

    //funkcja pokazująca sklepy i ich adresy w mieście podanym przez użytkownika. W przypadku nie podania miasta wyświeltone zostaną wszystkie sklepy.
    public function show_shops(){
        $pdo = $this->pdo;
        $post_city = filter_input(INPUT_POST, 'city');

        //sprawdzamy czy zostało wprowadzone miasto w wyszukiwaniu, jeżeli nie, to wyświetlamy wszystkie sklepy
        if(!empty($post_city)){
            $query = $pdo->prepare('SELECT * FROM sklepy WHERE city=:city ORDER BY name');
            $query->bindParam(':city', $post_city);
            $query->execute();
            $results = $query->fetchAll();

            if(!empty($results)){
                foreach($results as $row){
                    echo '<h2>' . $row['name'] . ' - ulica ' . $row['street'];
                    echo ', ' . $row['postcode'] . ', ' . $row['city'] . '</h2>'; 
                }
            } else {
                echo '<h2>Brak sklepów w podanej lokalizacji!</h2>';
            }
            
        } else {
            $query = $pdo->prepare('SELECT * FROM sklepy ORDER BY name');
            $query->execute();
            $results = $query->fetchAll();

            foreach($results as $row){
                echo '<h2>' . $row['name'] . ' - ulica ' . $row['street'];
                echo ', ' . $row['postcode'] . ', ' . $row['city'] . '</h2>'; 
            }
        }
    }

    //funkcja wyświetlająca galerię pobierająca linki do obrazów z bazy danych
    public function show_gallery_images(){
        //zapisujemy ile jest wszystkich obrazów w bazie danych i obliczamy ile stron potrzeba na ich wyświetlenie
        $pdo = $this->pdo;
        $query = $pdo->prepare('SELECT * FROM galeria');
        $query->execute();
        $totalItems = count($query->fetchAll());
        $maxItems = 9;
        $pages = ceil($totalItems / $maxItems);

        //sprawdzamy aktualnie wyświetlaną stronę
        if(isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])){
            $currentpage = (int)$_GET['currentpage'];
        } else {
            $currentpage = 1;
        }

        //sprawdzamy czy nie został wprowadzony currentpage wyższy od maksymalnej ilości page
        if($currentpage > $pages){
            $currentpage = $pages;
        }

        if($currentpage < 1){
            $currentpage = 1;
        }

        $offset = ($currentpage - 1) * 9;
        $limit= 9;

        //wczytujemy po 9 obrazów z bazy danych
        $query = $pdo->prepare('SELECT * FROM galeria LIMIT :first, :limit');
        $query->bindParam(':first', $offset, PDO::PARAM_INT);
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll();

        //wyświetlamy strzalkę do poprzedniej strony, jeżeli jesteśmy na innej stronie niż pierwsza
        if($currentpage > 1){
            $prev = $currentpage - 1;
            echo '<a href="?currentpage='.$prev.'"><img src="images/arrow-left.svg"></a>';
        }

        //tworzymy diva na obrazy i wyświetlamy je
        echo '<div class="img-container">';
        foreach($results as $row){
            echo '<div id="'.$row['ID'].'">';
            echo '<img src="'.$row['link'].'" alt="'.$row['name'].'"  class="image-display"/>';
            echo '<div class="hidden-desc">'.$row['description'].'</div>';
            echo '</div>';
        }
        echo '</div>';

        //a tu strzałka do kolejnej strony, jezeli strona nie jest stroną ostatnią
        if($currentpage != $pages){
            $next = $currentpage + 1;
            echo '<a href="?currentpage='.$next.'"><img src="images/arrow-right.svg"></a>';
        }
    }

    //funkcja do wyświetlania tekstu
    public function show_text($text_name){
        $pdo = $this->pdo;
        
        $query = $pdo->prepare('SELECT * FROM tekst WHERE name=:name');
        $query->bindParam(':name', $text_name, PDO::PARAM_STR);
        $query->execute();
        $row = $query->fetch();

        echo $row['text'];
    }

    //funkcja do wstawiania napisów z linkami z bazy danych
    public function show_link($link_name){
        $pdo = $this->pdo;

        $query = $pdo->prepare('SELECT * FROM linking WHERE name=:name');
        $query->bindParam(':name', $link_name, PDO::PARAM_STR);
        $query->execute();
        $row = $query->fetch();
        echo '<li '.(($row['class'] != NULL)?'class="'.$row['class'].'"':"").'><a href="'.$row['source'].'">'.$row['name'].'</a></li>';
    }

    //funkcja do wyświetlania grafik i obrazów
    public function show_image($img_name){
        $pdo = $this->pdo;

        $query = $pdo->prepare('SELECT * FROM graphics WHERE name=:name');
        $query->bindParam(':name', $img_name, PDO::PARAM_STR);
        $query->execute();
        $row = $query->fetch();
        echo '<img src="'.$row['source'].' " '.(($row['class'] != NULL)?' class="'.$row['class'].'"':"").' '.(($row['id'] != NULL)?' id="'.$row['id'].'"':"").' '.(($row['alt'] != NULL)?' alt="'.$row['alt'].'"':"").'>';
    }
}



?>