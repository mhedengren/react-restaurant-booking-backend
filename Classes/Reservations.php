<?php

include './database-connection.php';

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
        $statement = $pdo->prepare("SELECT * FROM `reservations` 
            WHERE res_date = :res_date "); 
            $statement->execute(
                [
                    ":res_date" => "2019-08-29"
                ]
            );

            $listWithRes = [];
            while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                array_push($listWithRes, [
                    "id" => $row->res_id,
                    "guests" => $row->res_guests,
                    "date" => $row->res_date,
                    "time" => $row->res_time,
                    "name" => $row->res_name,
                    "email" => $row->res_email,
                    "phone" => $row->res_tel,
                ]);    
            }

            return json_encode($listWithRes);
    }
}