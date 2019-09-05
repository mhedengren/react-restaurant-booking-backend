<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include './Classes/Reservations.php';

$data = json_decode(file_get_contents('php://input'));
var_dump($data);
$reservation = new Reservations();

$reservation->res_id = $data;
$reservation->res_guests = $data;
$reservation->res_date = $data;
$reservation->res_time = $data;
$reservation->res_name = $data;
$reservation->res_email = $data;
$reservation->res_tel = $data;

$update = $reservation->adminUpdateReservation($pdo);
echo json_encode($update);


?>