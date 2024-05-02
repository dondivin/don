<?php
include 'conn.php';

$id = $_GET['iduser'];

$idGenSan = mysqli_real_escape_string($conn, $id);

$req3 = 'INSERT INTO partenaire(userID) values(?)';
$stmt3 = $conn->prepare($req3);
$stmt3->bind_param("i" ,$idGenSan);
$stmt3->execute();

$stmt3->close();
$conn->close();

?>