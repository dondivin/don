<?php
session_start();
include "conn.php";
$id_user = $_SESSION['user'];
$mode = $_POST['mode'];
$req = mysqli_query($conn,"select * from setlang where id_code = '$id_user'");
if(mysqli_num_rows($req)>0){
      
            $sql = mysqli_query($conn,"update setlang set mode = '".$mode."' where id_code = '$id_user'");
            header("location:profil.php");
        }else{
            $insrt = $conn->prepare("insert into setlang(mode,id_code) value(?,?)");
            $insrt->bind_param("ss",$mode,$id_user);
            $insrt->execute();
            header("location:profil.php");
        }

?>