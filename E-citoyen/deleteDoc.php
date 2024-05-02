<?php
include 'conn.php';
session_start();
if(isset($_SESSION['userID'])){
    $idDoc = $_GET['id'];
    $userID = $_SESSION['userID'];

  $req ="DELETE FROM document WHERE id_doc = '$idDoc' AND userID = '$userID' AND status_doc = 'Rejeté'";
  if(mysqli_query($conn,$req)){
    echo "supression successful";
    header("Location:accueil.php");
  }else{
    echo "error occur";
  }
}else{
    header("Location:index.php");
}
?>