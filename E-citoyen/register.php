<?php
include 'conn.php';
$nom = $_GET['nom'];
$prenom = $_GET['pren'];
$idGen = $_GET['id'];
$password = $_GET['pass'];
$province = $_GET['prov'];



$nomSan = mysqli_real_escape_string($conn,$nom);
$prenomSan = mysqli_real_escape_string($conn,$prenom);
$idGenSan = mysqli_real_escape_string($conn,$idGen);
$passwordSan = mysqli_real_escape_string($conn,$password);
$provinceSan = mysqli_real_escape_string($conn,$province);



$req = 'INSERT INTO accounts(nom,prenom,userID,password) values(?,?,?,?)';
$stmt = $conn->prepare($req);
$stmt->bind_param("ssis" ,$nomSan ,$prenomSan ,$idGenSan ,$passwordSan);
$stmt->execute();
header('location:index.php');


$req1 = 'INSERT INTO personinfo(nom,prenom,provNaissance,userID) values(?,?,?,?)';
$stmt1 = $conn->prepare($req1);
$stmt1->bind_param("sssi" ,$nomSan ,$prenomSan,$provinceSan ,$idGenSan);
$stmt1->execute();

$req2 = 'INSERT INTO parentinfo(userID) values(?)';
$stmt2 = $conn->prepare($req2);
$stmt2->bind_param("i" ,$idGenSan);
$stmt2->execute();

$req3 = 'INSERT INTO partenaire(userID) values(?)';
$stmt3 = $conn->prepare($req3);
$stmt3->bind_param("i" ,$idGenSan);
$stmt3->execute();

$stmt2->close();
$conn->close();

?>