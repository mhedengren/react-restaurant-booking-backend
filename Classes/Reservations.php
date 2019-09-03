<?php

include './database-connection.php';

class Reservations {

    public $res_id;
    public $res_guests;
    public $res_date;
    public $res_time;
    public $res_name;
    public $res_email;
    public $res_tel; 

    public function fetchReservationsByDate($pdo) {
        $statement = $pdo->prepare("SELECT * FROM `reservations` 
            WHERE res_date = :res_date "); 
            $statement->execute(
                [
                    ":res_date" => $this->res_date
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

    public function adminReservationFetch($pdo) {
        $statement = $pdo->prepare("SELECT * FROM reservations");
            $statement->execute();
            $allRes = [];
            while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                array_push($allRes, [
                    "id" => $row->res_id,
                    "guests" => $row->res_guests,
                    "date" => $row->res_date,
                    "time" => $row->res_time,
                    "name" => $row->res_name,
                    "email" => $row->res_email,
                    "phone" => $row->res_tel,
                ]);
            }
            return json_encode($allRes);
    }

    public function adminDeleteReservation($pdo) {
        $statement = $pdo->prepare("DELETE FROM reservations WHERE res_id = :res_id ");
            $statement->execute(
                [
                    ":res_id"=> $this->res_id
                ]
            );
    }

    public function adminUpdateReservation($pdo) {
        $statement = $pdo->prepare("UPDATE reservations 
        SET res_guests = :res_guests,
        res_date = :res_date 
        WHERE res_id = :res_id");
    }
}