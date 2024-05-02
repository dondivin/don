<?php
include 'conn.php';
session_start();


if(isset($_SESSION['userID'])){

    $nom = $_GET['nom'];
    $prenom = $_GET['pren'];

    $dataNe = $_GET['date'];

    $residence = $_GET['resid'];

    $profession = $_GET['prof'];
    $nationalite =$_GET['nation'];


   /* $nom = 'Ntakirutimana';
    $prenom = 'Melance';

    $dataNe = '01-01-1974';

    $residence = 'Kayanza';

    $profession = 'Chauffeur';
    $nationalite = 'Burundaise';*/



    $userID = $_SESSION['userID'];
    
    
    $nomSan = mysqli_real_escape_string($conn,$nom);
    $prenomSan = mysqli_real_escape_string($conn,$prenom);
 
    $dateSan = mysqli_real_escape_string($conn,$dataNe);
 
    $residenceSan = mysqli_real_escape_string($conn,$residence);
  
    $professionSan = mysqli_real_escape_string($conn,$profession);
    $nationaliteSan = mysqli_real_escape_string($conn,$nationalite);

    $req = 'UPDATE parentinfo SET  nom_mere=?,prenom_mere=?,date_mere=?,profession_mere=? ,residence_mere=?,nationalite_mere=? WHERE userID=?';
    $stmt = $conn->prepare($req);
    $stmt->bind_param("ssssssi" ,$nomSan ,$prenomSan ,$dateSan ,$professionSan ,$residenceSan ,$nationaliteSan ,$userID);
    $stmt->execute();
    echo "successfully registered";
    $stmt->close();
    $conn->close();
}else{
    echo "no session found";
}



?>