<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include './Classes/Reservations.php';


$allRes = new Reservations();
$adminRes = $allRes->adminReservationFetch($pdo);
echo json_encode($adminRes);

?>