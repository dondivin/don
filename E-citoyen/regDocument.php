<?php

include 'conn.php';
session_start();

if(isset($_SESSION['userID'])){









$docName = $_GET['doc'];
$itemID = $_GET['itemId'];
$province;
$commune;
//$docName = 'Identite complete';
$userID = $_SESSION['userID'];
$sql = "SELECT * FROM personinfo WHERE userID = '$userID'";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
    foreach($res as $row){
        $province = $row['provNaissance'];
        $commune = $row['ComNaissance'];
    }
}

if(intVal($itemID) === 0 || intVal($itemID) === 1){
    $validetor = 'ADC';
    if(intVal($itemID) === 0){
        $doc_sub = 'ID';

        $duplication = false;

        $meReq = "SELECT * FROM personinfo INNER JOIN parentinfo ON personinfo.userID = parentinfo.userID WHERE personinfo.userID = '$userID'";
        $findMe = mysqli_query($conn, $meReq);
        if(mysqli_num_rows($findMe)>0){
            foreach($findMe as $row){
                $myName = strtolower($row['nom']);
                $mySurname = strtolower($row['prenom']);
                $myFather_name = strtolower($row['nom_pere']);
                $myFather_surname = strtolower($row['prenom_pere']);
                $myMom_name = strtolower($row['nom_mere']);
                $myMom_surname = strtolower($row['prenom_mere']);
    
    
             $RechReq = "SELECT * FROM personinfo WHERE nom = '$myName' AND prenom = '$mySurname' AND userID !='$userID'";
             $RechRes = mysqli_query($conn,$RechReq);
             if(mysqli_num_rows($RechRes)>0){
                foreach($RechRes as $resRow){
                    $otherUserID = $resRow['userID'];
                    $RechParentReq = "SELECT * FROM parentinfo WHERE userID = '$otherUserID'";
                    $RechParentRes = mysqli_query($conn,$RechParentReq);
                    if(mysqli_num_rows($RechParentRes)>0){
                        foreach($RechParentRes as $parentRow){
                            $otherUser_father_name = strtolower($parentRow['nom_pere']);
                            $otherUser_father_surname = strtolower($parentRow['prenom_pere']);
                            $otherUser_mom_name = strtolower($parentRow['nom_mere']);
                            $otherUser_mom_surname = strtolower($parentRow['prenom_mere']);
    
                            if($myFather_name === $otherUser_father_name && $myFather_surname === $otherUser_father_surname 
                               && $myMom_name === $otherUser_mom_name && $myMom_surname === $otherUser_mom_surname){
                                $duplication = true;
                               }
                        }
                    }
                }
             }
    
    
    
            }
        }
    
    if(!$duplication){
        $req = 'INSERT INTO document(nom_doc,doc_sub,userID,validetor,province,commune) values(?,?,?,?,?,?)';
        $stmt = $conn->prepare($req);
        $stmt->bind_param('ssisss', $docName,$doc_sub,$userID,$validetor,$province,$commune);
        $stmt->execute();
        echo 'success registered';
        //exit('success Registered');
        $stmt->close();
        $conn->close();
    }else{
        $validetors = 'No';
        $provinces = 'No';
        $communes = 'No';
        $status_doc = 'Indisponible';
        $req = 'INSERT INTO document(nom_doc,doc_sub,userID,status_doc,validetor,province,commune) values(?,?,?,?,?,?,?)';
        $stmt = $conn->prepare($req);
        $stmt->bind_param('ssissss', $docName,$doc_sub,$userID,$status_doc,$validetors,$provinces,$communes);
        $stmt->execute();
        echo('success Registered but it is in unvailable state'); 
        $stmt->close();
        $conn->close();
    }
   


    }else{
        $doc_sub = 'ID_CERT';
        $req = 'INSERT INTO document(nom_doc,doc_sub,userID,validetor,province,commune) values(?,?,?,?,?,?)';
        $stmt = $conn->prepare($req);
        $stmt->bind_param('ssisss', $docName,$doc_sub,$userID,$validetor,$province,$commune);
        $stmt->execute();
        echo 'success registered';
        exit('success Registered');
        $stmt->close();
        $conn->close();
    }

   

    
  
}elseif(intVal($itemID) === 2 || intVal($itemID) === 3){
    $validetor = 'OECA';
    if(intVal($itemID) === 2){
        $doc_sub = 'extr_ne';
    }else{
        $doc_sub = 'extr_ma';
    }
    $req = 'INSERT INTO document(nom_doc,doc_sub,userID,validetor,province,commune) values(?,?,?,?,?,?)';
    $stmt = $conn->prepare($req);
    $stmt->bind_param('ssisss', $docName,$doc_sub,$userID,$validetor,$province,$commune);
    $stmt->execute();
    echo 'success registered';
    $stmt->close();
    $conn->close();
}elseif(intVal($itemID) === 4){
    $validetor = 'GP';
  
        $doc_sub = 'bon_cond';
   
    $req = 'INSERT INTO document(nom_doc,doc_sub,userID,validetor,province,commune) values(?,?,?,?,?,?)';
    $stmt = $conn->prepare($req);
    $stmt->bind_param('ssisss', $docName,$doc_sub,$userID,$validetor,$province,$commune);
    $stmt->execute();
    echo 'success registered';
    $stmt->close();
    $conn->close();
}elseif(intVal($itemID) === 5){
    $validetor = 'PG';
    
    $doc_sub = 'cas_jud';
   
    $req = 'INSERT INTO document(nom_doc,doc_sub,userID,validetor,province,commune) values(?,?,?,?,?,?)';
    $stmt = $conn->prepare($req);
    $stmt->bind_param('ssisss', $docName,$doc_sub,$userID,$validetor,$province,$commune);
    $stmt->execute();
    echo 'success registered';
    $stmt->close();
    $conn->close();
}elseif(intVal($itemID) === 6){
    $validetor = 'DZONE';
    
    $doc_sub = 'att_resid';
   
    $req = 'INSERT INTO document(nom_doc,doc_sub,userID,validetor) values(?,?,?,?)';
    $stmt = $conn->prepare($req);
    $stmt->bind_param('ssis', $docName,$doc_sub,$userID,$validetor);
    $stmt->execute();
    echo 'success registered';
    $stmt->close();
    $conn->close();
}else{
   
        $validetor = 'none';
        $req = 'INSERT INTO document(nom_doc,userID,validetor) values(?,?,?)';
        $stmt = $conn->prepare($req);
        $stmt->bind_param('sis', $docName,$userID,$validetor);
        $stmt->execute();
        echo 'success registered';
        $stmt->close();
        $conn->close();
  
}

//$docSan = mysqli_real_escape_string($conn,$docName);

}else{
    echo "Error session";
}





?>