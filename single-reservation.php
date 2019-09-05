<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include './Classes/Reservations.php';



$data = $_GET['res_id'];

$reservation = new Reservations();

$reservation->res_id = $data;

$singleReservation = $reservation->getSingleReservation($pdo);
echo ($singleReservation);

?>