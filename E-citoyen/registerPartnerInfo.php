<?php
include 'conn.php';
session_start();


if(isset($_SESSION['userID'])){

    $nom = $_GET['nom'];
    $prenom = $_GET['pren'];
    $nomPere = $_GET['nomPere'];
    $nomMere = $_GET['nomMere'];
    $dataNe = $_GET['date'];
    $profession = $_GET['prof'];
    $residence = $_GET['resid'];
    $nation = $_GET['nation'];

    $date_de_marriage = $_GET['date_marriage'];
   

    /*$nom = "don";
    $prenom = "divin";
    $nomPere = "gakuba";
    $nomMere = "jeanne";
    $dataNe = "25-2-2000";
    $profession = "commercant";
    $residence = "buja";
    $nation = "burundaise";*/









    
    $userID = $_SESSION['userID'];
    
    
    $nomSan = mysqli_real_escape_string($conn,$nom);
    $prenomSan = mysqli_real_escape_string($conn,$prenom);
  
    $nomPereSan = mysqli_real_escape_string($conn,$nomPere);
    $nomMereSan = mysqli_real_escape_string($conn,$nomMere);
    $dateSan = mysqli_real_escape_string($conn,$dataNe);
    $professionSan = mysqli_real_escape_string($conn,$profession);
    $residenceSan = mysqli_real_escape_string($conn,$residence);
    $nationSan = mysqli_real_escape_string($conn,$nation);

    $date_de_marriage_san = mysqli_real_escape_string($conn,$date_de_marriage);

    $req1 = "UPDATE personinfo SET date_de_marriage = '$date_de_marriage_san' WHERE userID = '$userID'";
    if(mysqli_query($conn,$req1)){
      //  echo 'date registered';
    }else{
        echo 'date registered failed';
    }
   

    $req = 'UPDATE partenaire SET  nom_partenaire=?,prenom_partenaire=?,nom_pere_partenaire=?,nom_mere_partenaire=?,partenaire_naissance=?,residance_partenaire=?,profession_partenaire=?,nationalite_patenaire=? WHERE userID=?';
    $stmt = $conn->prepare($req);
    $stmt->bind_param("ssssssssi" ,$nomSan ,$prenomSan ,$nomPereSan ,$nomMereSan ,$dateSan ,$residenceSan ,$professionSan ,$nationSan ,$userID);
    $stmt->execute();
    echo "successfully registered";
    $stmt->close();
    $conn->close();
}else{
    echo "no session found";
}



?>