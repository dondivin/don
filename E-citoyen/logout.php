<?php
session_start();


if(isset($_SESSION['userID'])){
    session_destroy();
    echo 'session is destroyed';
    header('location:index.php');
}else{
    echo 'no session found';
}





?>