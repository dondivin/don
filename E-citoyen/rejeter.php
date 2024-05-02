<?php
include 'conn.php';

$docValid = $_GET['doc'];
$usersID = $_GET['usersID'];
$rejeter = 'Rejeté';
$req = "UPDATE document SET status_doc = ? WHERE id = ?";
$stmt = $conn->prepare($req);
$stmt->bind_param("si",$rejeter, $docValid);
$stmt->execute();
$stmt->close();
$conn->close();

?>