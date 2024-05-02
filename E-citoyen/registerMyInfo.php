<?php
include 'conn.php';
session_start();


if(isset($_SESSION['userID'])){

    $nom = $_GET['nom'];
    $prenom = $_GET['pren'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $dataNe = $_GET['mydate'];
    $lieu = $_GET['lieu'];
    $commune = $_GET['commune'];
    $province =$_GET['prov'];
    $gender = $_GET['gender'];

    $status = $_GET['stat'];
    $profession = $_GET['prof'];
    $residZone = $_GET['residZone'];
    $residProv = $_GET['residProv'];
    $residCom = $_GET['residCom'];
    $residQuarter = $_GET['residQuart'];
    $residAvenue = $_GET['residAvenue'];


    /*$nom = 'Ntakirutimana';
    $prenom = 'Don divin';
    $phone = '61897311';
    $email = 'Dondivin@gmail.com';
    $dataNe = '17-10-2010';
    $lieu = 'Musave';
    $commune = 'kayanza';
    $province ='kayanza';
    $gender = 'homme';
    $residence = 'bujumbura';
    $status = 'Celbataire';
    $profession = 'Developer';
*/









    
    $userID = $_SESSION['userID'];
    
    
    $nomSan = mysqli_real_escape_string($conn,$nom);
    $prenomSan = mysqli_real_escape_string($conn,$prenom);
    $phoneSan = mysqli_real_escape_string($conn,$phone);
    $emailSan = mysqli_real_escape_string($conn,$email);
    $dateSan = mysqli_real_escape_string($conn,$dataNe);
    $lieuSan = mysqli_real_escape_string($conn,$lieu);
    $communeSan = mysqli_real_escape_string($conn,$commune);
    $provinceSan = mysqli_real_escape_string($conn,$province);
    $genderSan = mysqli_real_escape_string($conn,$gender);
   
    $statSan = mysqli_real_escape_string($conn,$status);
    $professionSan = mysqli_real_escape_string($conn,$profession);
    $residZoneSan = mysqli_real_escape_string($conn,$residZone);
    $residProvSan = mysqli_real_escape_string($conn,$residProv);
    $residComSan = mysqli_real_escape_string($conn,$residCom);

    $req = 'UPDATE personinfo SET  nom=?,prenom=?,numero=?,Email=?,dateNaissance=?,lieuNaissance=?,provNaissance=?,ComNaissance=?,genre=?,Residence_actu_prov=?,Residence_actu_com=?,Residence_actu_zone=?,Residence_actu_quarter=?,Residence_actu_avenue=?,etat_civil=?,profession=? WHERE userID=?';
    $stmt = $conn->prepare($req);
    $stmt->bind_param("ssssssssssssssssi" ,$nomSan ,$prenomSan ,$phoneSan ,$emailSan ,$dateSan ,$lieuSan ,$provinceSan ,$communeSan ,$genderSan ,$residProvSan,$residComSan,$residZone,$residQuarter,$residAvenue ,$statSan ,$professionSan ,$userID);
    $stmt->execute();
    echo "successfully registered";
    $stmt->close();
    $conn->close();
}else{
    echo "no session found";
}



?>