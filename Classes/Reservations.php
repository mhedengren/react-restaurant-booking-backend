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

    public function getSingleReservation($pdo) {
        $statement = $pdo->prepare("SELECT * FROM `reservations` 
        WHERE res_id = :res_id "); 
        $statement->execute(
            [
                ":res_id" => $this->res_id
            ]
        );
        $singleRes = new stdClass();
            while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                
                $singleRes->id = $row->res_id;
                $singleRes->guests = $row->res_guests;
                $singleRes->date = $row->res_date;
                $singleRes->time = $row->res_time;
                $singleRes->name = $row->res_name;
                $singleRes->email = $row->res_email;
                $singleRes->phone = $row->res_tel;
            }
            return json_encode($singleRes);

    }

    public function adminUpdateReservation($pdo) {
        $statement = $pdo->prepare("UPDATE reservations 
        SET
        res_id = :res_id, 
        res_guests = :res_guests,
        res_date = :res_date,
        res_time = :res_time,
        res_name = :res_name,
        res_email = :res_email,
        res_tel = :res_tel 
        WHERE res_id = :res_id");

        $statement->execute(
            [
                ":res_id" => $this->res_id,
                ":res_guests" => $this->res_guests,
                ":res_date" => $this->res_date,
                ":res_time" => $this->res_time,
                ":res_name" => $this->res_time,
                ":res_email" => $this->res_email,
                ":res_tel" => $this->res_tel
            ]
        ); return;
        $updatedRes = new stdClass();
            while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                
                $updatedRes->id = $row->res_id;
                $updatedRes->guests = $row->res_guests;
                $updatedRes->date = $row->res_date;
                $updatedRes->time = $row->res_time;
                $updatedRes->name = $row->res_name;
                $updatedRes->email = $row->res_email;
                $updatedRes->phone = $row->res_tel;   
            }
            return json_encode($updatedRes);
    }


    public function postReservation($pdo){

    $statement = $pdo->prepare("INSERT INTO reservations (res_guests, res_date, res_time, res_name, res_email, res_tel)
    VALUES (:res_guests, :res_date, :res_time, :res_name, :res_email, :res_tel)");

  $statement->execute(
    [
    ":res_guests" => $this->res_guests,
    ":res_date" =>  $this->res_date,
    ":res_time" =>  $this->res_time,
    ":res_name" =>  $this->res_name,
    ":res_email" =>  $this->res_email,
    ":res_tel" =>  $this->res_tel
    ]
);
}
}