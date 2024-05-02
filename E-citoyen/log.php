<?php
include 'conn.php';

$UserID = $_GET['id'];
$password = $_GET['pass'];
session_start();

$UserIDSan = mysqli_real_escape_string($conn,$UserID);
$passwordSan = mysqli_real_escape_string($conn,$password);

$sql = "SELECT * from accounts WHERE userID ='$UserIDSan' AND password = '$passwordSan'"; //i requet urondera ama donne ar mur base de donnee

$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res) === 1){  //kuraba ko ama donne yatanzwe asa nayari muri base de donnee 

        
        foreach($res as $row){
            if($row['type_account'] === 'ADC'){
                $_SESSION['validator'] = $row['type_account'];
                $_SESSION['userID'] = $UserIDSan;
               // echo $_SESSION['validator'];
                header('location:ADC.php');
               
            }elseif($row['type_account'] === 'PG'){
                $_SESSION['validator'] = $row['type_account'];
                $_SESSION['userID'] = $UserIDSan;
                header('location:PG.php');
            }elseif($row['type_account'] === 'OECA') {
                $_SESSION['validator'] = $row['type_account'];
                $_SESSION['userID'] = $UserIDSan;
                header('location:OECA.php');
            }elseif($row['type_account'] === 'GP'){
                $_SESSION['validator'] = $row['type_account'];
                $_SESSION['userID'] = $UserIDSan;
                header('location:GP.php');
            }elseif($row['type_account'] === 'CGPJ'){
                $_SESSION['validator'] = $row['type_account'];
                $_SESSION['userID'] = $UserIDSan;
                header('location:CGPJ.php');
            }elseif($row['type_account'] === 'DZONE'){
                $_SESSION['validator'] = $row['type_account'];
                $_SESSION['userID'] = $UserIDSan;
                header('location:DZONE.php');
            }else{
                $_SESSION['userID'] = $UserIDSan;
                $_SESSION['validator'] = 'simple';
                header('location:accueil.php');
            }
        }
       // header('location:accueil.php'); //ica ikujana kuri page d accueil
    
}else{
    echo 'No account found';//dusanze ata account yizo donnee ir mur base de donnne izoca yafisha ko ata count yabonetse
}