<?php
include 'conn.php';

$docValid = $_GET['doc'];
$usersID = $_GET['usersID'];
$userID = $_GET['userID'];
$link;
$PGValid = false;
$is_PG_ = false;
$doc = '';
//get the name of the doc

$find = "SELECT * FROM document WHERE id_doc = '$docValid'";
$found = mysqli_query($conn, $find);
if(mysqli_num_rows($found)>0){
    foreach($found as $row){
        if($row['doc_sub']=== "ID"){
            $link = 'carte.php';
        }elseif($row['doc_sub'] === "ID_CERT"){
            $link = "attest_identite.php";
        }elseif($row['doc_sub'] === "cas_jud"){
            $link = "casier.php";
            $doc = 'cas_jud';
            $DocUsersID = $row['userID'];
            $req = "SELECT * FROM personinfo WHERE userID  = '$DocUsersID'";
            $res = mysqli_query($conn,$req);
            foreach($res as $row1){
                if($row1['bonne_conduite'] !== ''){
                    $PGValid = true;
                    $is_PG_ = true;
                }

            }
            
        }elseif($row['doc_sub'] === "extr_ne"){
         
                    $link = "attest_naissance.php";
          
            
        }elseif($row['doc_sub'] === "extr_ma"){
            $link = "attestation_marriage.php";
        }elseif($row['doc_sub'] === "bon_cond"){
         
                    $link = "conduite.php"; 
           
           
        }elseif($row['doc_sub'] === "att_resid"){
         
            $link = "attest_residence.php"; 
   
   
}else{
           echo "no link";
           $link = 'none';
        }
    }
}
/*$id = $_GET['id1'];
$id1 = $_GET['id2'];
$id2 = $_GET['id3'];
$idGenID = $id+'/'+$id1+'.'+$id2;*/
//parse_str($_GET['idGen'],$idGenID);
$idGenID = $_GET['idGen'];
//echo $idGenID;
$reqUser = "SELECT * FROM systpost where userID = '$userID'";
$derivery;
$resUser = mysqli_query($conn,$reqUser);
foreach($resUser as $row){
    $derivery = $row['commune_post'];
}

$usersIDSan = mysqli_real_escape_string($conn, $usersID);

$userIDSan = mysqli_real_escape_string($conn, $userID);

$valide = "Validé";
$nationalite = "Burundaise";
$date = new DateTime();
$dates = $date->format('d/m/Y');
//echo $dates;
/*$reqPerson = "UPDATE personinfo SET numID = '$idGenID',wherederiveryID='$derivery',derivryDate='$dates' WHERE userID = '$userID'";
if(mysqli_query($conn,$reqPerson)){
    echo "<script>alert('Modification réussie');</script>";
}else{
    echo "<script>alert('Modification échouée');</script>";
}*/
if($link === "carte.php"){
$reqPerson = "UPDATE personinfo SET numID = ?,wherederiveryID=?,derivryDate=?,nationalite=? WHERE userID = ?";

$stmtPerson = $conn->prepare($reqPerson);
$stmtPerson->bind_param("ssssi", $idGenID ,$derivery ,$dates,$nationalite,$usersID);
echo 'carte est validé';
$stmtPerson->execute();
$stmtPerson->close();

}else{
  //  echo "not ID";
}
if(!$PGValid && $doc !== ''){
    
$info = "Néant";
    $req = "UPDATE personinfo SET bonne_conduite = ? WHERE userID = ?";
    $stmt = $conn->prepare($req);
    $stmt->bind_param("si",$info, $usersID);
    echo 'bone conduite est validé';
    $stmt->execute();
    $stmt->close();
   
$validateur = 'CGPJ';
    $req1 = "UPDATE document SET validetor=?,first_date_valid=? WHERE id_doc = ?";
$stmt1 = $conn->prepare($req1);
$stmt1->bind_param("ssi",$validateur,$dates, $docValid);

$stmt1->execute();
$stmt1->close();
    $conn->close();  
}

if($doc !== ''){
    if($is_PG_){
        $req = "UPDATE document SET status_doc = ?,date_valid=?,link=? WHERE id_doc = ?";
        $stmt = $conn->prepare($req);
        $stmt->bind_param("sssi",$valide,$dates,$link, $docValid);
        $stmt->execute();
        echo 'doc est validé et link = '.$link;
        $stmt->close();
        $conn->close();
    }
 
}elseif($doc === ''){
    $req = "UPDATE document SET status_doc = ?,date_valid=?,link=? WHERE id_doc = ?";
    $stmt = $conn->prepare($req);
    $stmt->bind_param("sssi",$valide,$dates,$link, $docValid);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}





?>