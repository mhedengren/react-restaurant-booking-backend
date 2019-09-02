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

$reservation->res_id = $data->params->res_id;

$delete = $reservation->adminDeleteReservation($pdo);
echo ($delete);

?>