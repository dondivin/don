<?php

$user = 'root';
$host = 'localhost';
$pass = '';

$conn = new mysqli($host ,$user ,$pass);

if(!$conn){
    die('cannot connect '.mysqli_error());
}else{
    echo"successfully connected";
};
$db = mysqli_select_db($conn,'agrica');
if(empty($db)){
    echo"no database was found";
}else{
    echo"database connected";
}

?>