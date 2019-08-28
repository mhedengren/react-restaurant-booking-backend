<?php
session_start();

include './Classes/Reservations.php';

$reservation = new Reservations();
$test1 = $reservation->fetchReservations($pdo);
echo json_encode($test1);

?>

