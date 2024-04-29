<?php
session_start();
$id_user = $_SESSION['user'];
include 'conn.php';

$sql = "select * from accounts where id_code = '$id_user'";
$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    foreach($res as $row){
        $user = $row['email'];
        echo "$user";
    }
};
if(!isset($_POST["certifie"])){
    $certKg = 0;
}else{
    $certKg = $_POST['certifie'];
};


$prov = $_POST['province'];
$commune = $_POST['commune'];
$colline = $_POST['colline'];
$type_cult = $_POST['type_cul'];

$sperficie = $_POST['number'];
$mesure = $_POST['meter'];
$categ = $_POST['type_cat'];
$saison = $_POST['saison'];
$date = $_POST['date'];

$req = "insert into rapport(province,commune,colline,type_culture,sperficie,mesure,categorie,imbuto,saison,date,id_code) values(?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($req);
$stmt->bind_param("ssssississs",$prov,$commune,$colline,$type_cult,$sperficie,$mesure,$categ,$certKg,$saison,$date,$id_user);
$stmt->execute();
header("location:profil.php");
$stmt->close();
$conn->close();
?>