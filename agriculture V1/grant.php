
<?php
session_start();
$id_user = $_SESSION['user'];
$id_per = $_GET['id_per'];
include 'conn.php';
$status = 'Administrateur';
$sql = "select * from personal";
$check = false;
$count = 0;
$find = mysqli_query($conn,$sql);
if(mysqli_num_rows($find)>0){
    foreach($find as $row){
        if($row['status']==$status){
            $count++;
            if($count <5){
                $check = true;
            }else{
                $check = false;
            }
        }
     
    }
    echo $count;
};

/*$find = mysqli_query($conn,$sql);
if(mysqli_num_rows($find)>0){
    foreach($find as $row){

    }
}*/
if($check == true){
$update = "update personal set status = '".$status."' where id = '$id_per'";

$stmt =$conn->prepare($update);
$stmt->execute();
header("location:employee.php");
$stmt->close();
$conn->close();
}else{
    echo "<script>alert('you have reached maximum admin')</script>";
   header("location:employee.php"); 
}
?>