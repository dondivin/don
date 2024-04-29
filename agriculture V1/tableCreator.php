<?php
$user = 'root';
$pass = '';
$db = 'test';
$host = 'localhost';

$conn = new mysqli($host ,$user ,$pass ,$db) or die("cannot connect to $db");
if(!$conn){
    die('couldn t connect');
}else{
    echo "successfully to $db";
}
/*CREATE TABLE `personal` (
    `id` int(11) NOT NULL,
    `fullName` varchar(40) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `email` varchar(40) NOT NULL,
    `address` varchar(20) NOT NULL,
    `Num_id` varchar(20) NOT NULL,
    `genre` varchar(20) NOT NULL,
    `country` varchar(20) NOT NULL,
    `status` varchar(20) NOT NULL DEFAULT 'Employé(e)',
    `profil` varchar(100) NOT NULL DEFAULT 'user.svg',
    `user` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;*/

  $req = "create table personal(id int(11)PRIMARY KEY AUTO_INCREMENT NOT NULL,fullName varchar(40) NOT NULL,phone varchar(20) NOT NULL,email varchar(40) NOT NULL,address varchar(30) NOT NULL,
  Num_id varchar(20) NOT NULL,genre varchar(20) NOT NULL,country varchar(20) NOT NULL,status varchar(20) DEFAULT 'Employé(e)' NOT NULL,profil varchar(100) DEFAULT 'user.svg' NOT NULL,user varchar(50) NOT NULL)";

  $tbl_personal = mysqli_query($conn,$req);

  //CREATING ACCOUNTS

 /* CREATE TABLE `accounts` (
    `id` int(11) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `name` varchar(50) NOT NULL,
    `surname` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;*/

$sql = "create table accounts(id int(11)PRIMARY KEY AUTO_INCREMENT NOT NULL,email varchar(50) NOT NULL,password varchar(30) NOT NULL)";

$tbl_accounts = mysqli_query($conn,$sql);
  ?>