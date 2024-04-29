<?php
$user = 'root';
$pass = '';
$db = 'agrica';
$host = 'localhost';

$conn = new mysqli($host ,$user ,$pass ,$db) or die("cannot connect to $db");
/*if(!$conn){
    die('couldn t connect');
}else{
    echo "successfully to $db";
}*/
?>