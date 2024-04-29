
<?php
session_start();
$id_user = $_SESSION['user'];


include 'conn.php';




if(isset($_POST['send'])){
    $name = $_POST['nom'];
$sql = "insert into type_culture(nom) values(?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("s",$name);
$stmt->execute();
header("location:rapport.php");

$stmt->close();
$conn->close();
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/anothor.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        }
        body{
            width: 100vw;
            height: 100vh;
            background-color: aliceblue;
        }
 
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
<div class="behind">
<img src="icon/agrilogo.png" alt="">
    </div>
    <form class="addCul" action="" method="post">
        <div>
            <h1>Izina ry'igitegwa</h1>
        </div>
        <div>
            <input type="text" name="nom" placeholder="Nom de la culture" id="" required>
        </div>
        <div>
            <button type="submit" name="send">Kurungika</button>
        </div>
    </form>
</body>
</html>