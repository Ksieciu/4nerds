<?php

//klasa służąca połączeniom i operacjom na bazie danych
class DB_COMMUNICATION{

    private $pdo;
    public $dns;
    private $db_host = 'localhost';
    private $db_name = '4nerds';
    private $db_user = 'root';
    private $db_pass = '';

    //konstruktor przypisujący odpowiednie wartości do zmiennych obiektu potrzebnych do połączenia z bazą danych
    public function __construct(){
        try{
            $db_host = $this->db_host;
            $db_name = $this->db_name;
            $db_user = $this->db_user;
            $db_pass = $this->db_pass;
            $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name;
            $pdo = new PDO($dsn, $db_user, $db_pass);
            $this->pdo = $pdo; 

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

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
    
}



?>