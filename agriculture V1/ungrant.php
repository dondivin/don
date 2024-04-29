
<?php
session_start();
$id_user = $_SESSION['user'];
$id_per = $_GET['id_per'];
include 'conn.php';
$status = 'simple account';

/*$find = mysqli_query($conn,$sql);
if(mysqli_num_rows($find)>0){
    foreach($find as $row){

    }
}*/
$update = "update personal set status = '".$status."' where id = '$id_per'";

$stmt =$conn->prepare($update);
$stmt->execute();
header("location:employee.php");
$stmt->close();
$conn->close();
   header("location:employee.php"); 
?>