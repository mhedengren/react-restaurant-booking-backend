<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include './Classes/Reservations.php';

$reservation = new Reservations();
$delete = $reservation->adminDeleteReservation($pdo);
echo ($delete);

?>