<?php

//klasa służąca połączeniom i operacjom na bazie danych
class DB_COMMUNICATION{

    private $pdo;
    public $dns;
    private $db_host = 'localhost';
    private $db_name = 'bazadanych';
    private $db_user = 'root';
    private $db_pass = '';

    //konstruktor przypisujący odpowiednie wartości do zmiennych obiektu potrzebnych do połączenia z bazą danych
    public function __contruct(){
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


}




?>