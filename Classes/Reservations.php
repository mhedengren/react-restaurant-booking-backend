<?php

include '../database-connection.php';

class Reservations {

    // private $pdo;

    public $res_id;
    public $res_guest;
    public $res_date;
    public $res_time;
    public $res_name;
    public $res_email;
    public $res_tel; 

    // public function __construct($pdo)
    // {
        // $this->pdo = $pdo;
    // }

    public function fetchReservations($pdo) {
        $statement = $pdo->prepare("SELECT * FROM `reservation`"); 
            $statement->execute();
            $test = $statement->fetchAll();
            return $test;
}