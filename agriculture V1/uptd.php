
<?php
session_start();
include 'conn.php';
$id_user = $_SESSION['user'];
$id_rap = $_GET['id_rap'];

$prov =$_POST['prov'];
    $com =$_POST['com'];
    $coll =$_POST['coll'];
    $typ_cul =$_POST['typ_cul'];
    $sper =$_POST['sper'];
    $mesure =$_POST['mesure'];
    $categ =$_POST['categ'];
    $saison =$_POST['saison'];
    $idSanitiser = mysqli_real_escape_string($conn,$id_rap);
    
    $updt = $conn->prepare("update rapport set province = ? ,commune =  ?,colline = ? ,type_culture = ? ,sperficie = ? ,mesure = ? ,categorie = ?,saison = ? where id = '".$idSanitiser."'");
    $updt->bind_param("ssssssss",$prov,$com,$coll,$typ_cul,$sper,$mesure,$categ,$saison);
    //$updt = $conn->prepare("update rapport set province = '".$prov."' ,commune = '".$com."' ,colline = '".$coll."' ,type_culture = '".$typ_cul."' ,sperficie = '".$sper."' ,mesure = '".$mesure."' ,categorie = '".$categ."' ,saison = '".$saison."' where id = '$id_rap'");
    $updt->execute();
    header("location:profil.php");
    echo $id_user;
    echo $prov;
    
    ?>