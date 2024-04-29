
<?php
session_start();
$id_user = $_SESSION['user'];
$id_per = $_GET['id_per'];
include 'conn.php';
$status = 'AdminGrantor';
$sql = "select * from personal";
$check = false;
$find = mysqli_query($conn,$sql);
if(mysqli_num_rows($find)>0){
    foreach($find as $row){
        if($row['status'] == $status){
            $check = true;
        }
    }
};
/*$find = mysqli_query($conn,$sql);
if(mysqli_num_rows($find)>0){
    foreach($find as $row){

    }
}*/

$update = "update personal set status = '".$status."' where id_code = '$id_user'";
if($check == false){
$stmt =$conn->prepare($update);
$stmt->execute();
header("location:profil.php");
$stmt->close();
$conn->close();
}else{
    header("location:profil.php"); 
}
?>