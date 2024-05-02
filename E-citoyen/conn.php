<?php
$host = 'localhost';  //aho ugumiza uko nyene
$user = 'root';//naho nyene ugumiza uko nyene
$password = ''; //naho nynene ugumiza uko nyene
$db = 'e_citoyen'; //aha uhashira nom ya base de donne yawe

$conn = new mysqli($host ,$user ,$password ,$db) or die('failed to connect');

if(!$conn){
    
    echo 'can t connect';
}else{
   // echo 'connexion etablie'; 
}


?>