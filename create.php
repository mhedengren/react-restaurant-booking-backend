<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include './Classes/Reservations.php';

$data = json_decode(file_get_contents('php://input'));


$reservation = new Reservations();

$reservation->res_guests = $data->guests;
$reservation->res_date = $data->date;
$reservation->res_time = $data->time;
$reservation->res_name = $data->name;
$reservation->res_email = $data->email;
$reservation->res_tel = $data->phone;

$reservation->adminCreateReservation($pdo);


