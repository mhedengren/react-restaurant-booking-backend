<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include './Classes/Reservations.php';



$reservation = new Reservations();
$test1 = $reservation->fetchReservationsByDate($pdo);
echo ($test1);

$allRes = new Reservations();
$adminRes = $allRes->adminReservationFetch($pdo);
echo ($adminRes);
?>

