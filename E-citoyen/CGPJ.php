<?php
session_start();
include 'conn.php';

if(isset($_SESSION['userID'])){
    if(isset($_SESSION['validator'])){

 

 
        $userID = $_SESSION['userID'];
        $validator = $_SESSION['validator'];
        
        $commune;
        $province;


$sql = "SELECT * FROM accounts INNER JOIN document ON accounts.type_account = document.validetor WHERE accounts.type_account = '$validator'";
$res = mysqli_query($conn, $sql);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
         <link rel="stylesheet" href="css/styles1.css">
        <link rel="stylesheet" href="css/toast.css">
    <style>
                     .logo h1{
    font-size: 40px;
    font-weight: 900;
  
    background-image: url(icon/uburundi.png);
    background-position: center;
    text-transform: uppercase;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
   
}
.home main .user{
    top:-40px;
}
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="bg">
        <img src="photo/bg.png" alt="">
    </div>

    <div class="home">
    <header>
        <div class="logo">
            <h1>E-CITOYEN</h1>
        </div>

        <div class="file">
            <div class="imgfile  logout">
                 <img src="icon/icon-logout.png" alt="">
                <h2>Se Déconnecter</h2>
            </div>
         </div>
    </header>
    <main>
        <div class="user">
            <div class="imguser">
                <div class="img">
                    <img src="icon/user.svg" alt="">
                </div>
                
            </div>
            <div class="infouser">
         <?php
           $sql1 = "SELECT * FROM systpost WHERE userID = '$userID'";
           $res1 = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($res1)>0){
            foreach($res1 as $row){
                $commune = $row['commune_post'];
                $province = $row['province_post'];
        
         ?>
                      <div class="info">
                <h1>POST :</h1>
                <input type="text" value="Commissaire Général de la Police Judiciaire" readonly>
               </div>
               <div class="info">
                <h1>Province :</h1>
                <input type="text" value="<?=$row['province_post']?>" readonly>
               </div>
               <div class="info">
                <h1>Commune :</h1>
                <input type="text" value="<?=$row['commune_post']?>" readonly>
               </div>
               <div class="info">
                <h1>Nom :</h1>
                <input type="text" value="<?=$row['nomGov']?>" readonly>
               </div>
               <div class="info">
                <h1>Prénom :</h1>
                <input type="text" value="<?=$row['prenomGov']?>" readonly>
               </div>
      
               <div class="more">
                <button id="more">Plus</button>
               </div>
          <?php
    }
}
          ?>
            </div>
        </div>
        <div class="doc">
            <div class="title">
                <h2>Documents demandé</h1>
            
                <div class="heads">
                    <h2>#</h2>
                    <h2>Date</h2>
                    <h2>Type</h2>
                    <h2>status</h2>
                    <h2>Options</h2>
                </div>
            <!--    <div class="back1">
                    <p id="back">retour</p> 
                 </div>--> 
            </div>
            <div class="mydoc">
            <?php
             $req2 = "SELECT * FROM document WHERE validetor = '$validator' AND status_doc !='Rejeté'";
             $res2 = mysqli_query($conn,$req2);
        if(mysqli_num_rows($res2)>0){
            $count = 0;
            foreach($res2 as $row){
                $date = new DateTime($row['date_doc']);
                $dates = $date->format('d / m / Y');
                $count++;
        
         ?>
         <div class="allDocs">
                <div class="docs">
                <div class="count">
                       <p><?=$count?></p>
                    </div>
                    <div class="date">
                       <p><?=$dates?></p>
                    </div>
                    <div class="type">
                        <p><?=$row['nom_doc']?></p>
                    </div>
                    <div class="status">
                    
                    <?php 
                if($row['status_doc']!== 'no validé'){
                ?>
                <p id="valid"><?=$row['status_doc']?></p>
                <?php 
                }else{
                    ?>
                 <p id="no_valid"><?=$row['status_doc']?></p>
                    <?php
                }
                ?>
                   
                     
                        
                    </div>
                    <div class="download">
               
                       <img src="icon/three dot.svg" alt="">
                        
                    </div>

                </div>
                <div class="infoDoc">
                <?php 
                        $idDocUser = $row['userID'];
                        $req = "SELECT * FROM personinfo INNER JOIN parentinfo ON personinfo.userID = parentinfo.userID  WHERE personinfo.userID = '$idDocUser'";
                        $result = mysqli_query($conn, $req);
                        if(mysqli_num_rows($result)>0){
                            foreach($result as $row1){
                                $date = new DateTime($row1['dateNaissance']);
                                $dates = $date->format('Y');
                        ?>
                    <div class="info">
                   
                        <h2>Nom & Prénom : <?=$row1['nom']?> <?=$row1['prenom']?></h2>
                        <h2>Nom du Père : <?=$row1['nom_pere']?> <?=$row1['prenom_pere']?></h2>
                        <h2>Nom du mère : <?=$row1['nom_mere']?> <?=$row1['prenom_mere']?></h2>
                        <h2>Lieu et date de Né : <?=$row1['lieuNaissance']?> ,en <?=$dates?> ,<?=$row1['provNaissance']?> ,<?=$row1['ComNaissance']?></h2>
                        <h2>Etat civil : <?=$row1['etat_civil']?></h2>
                        <h2>Profession : <?=$row1['profession']?></h2>
                        
                      
                    </div>
                    <div class="info">
                        <h2>N° de la C.N.I : <?=$row1['numID']?></h2>
                        <h2>Nationalité : <?=$row1['nationalite']?></h2>
                        <h2>Residant à : <?=$row1['Residence_actu_zone']?>,<?=$row1['Residence_actu_com']?> <?=$row1['Residence_actu_prov']?></h2>
                        <?php
                        if($row1['etat_civil']!== "Célibataire"){
                            $id = $row1['userID'];
                        $reqP = "SELECT * from partenaire where userID = '$id'";
                        $resP = mysqli_query($conn,$reqP);
                        if(mysqli_num_rows($resP)>0){
                            foreach($resP as $row2){

                        
                        ?>
                        <h2>Nom du conjoint(e) : <?=$row2['nom_partenaire']?> <?=$row2['prenom_partenaire']?></h2>
                        <?php
                            }
                        }
                        }else{
                            ?>
                         <h2>Nom du conjoint(e) : <?=$row1['etat_civil']?></h2>
                            <?php
                        }
                        ?>
                       
                    </div>
                    
                    <?php
                             }
                            }
                            ?>
                        </div>

                        <div class="btn-valid">
                        <?php 
                      
                if($row['status_doc']!== 'Validé'){
                ?>
                    <div>
                        <button id="valider" onclick="valider(<?=$row['id_doc']?>,<?=$row['userID']?>,<?=$_SESSION['userID']?>)">Valider</button>
                    </div>
                    <div>
                       <button id="rejeter" onclick="Rejeter(<?=$row['id_doc']?>,<?=$row['userID']?>)">Rejeter</button>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="unvailable">
                        <p>Document est validé</p>
                    </div>
                    <?php
                }
                ?>
                </div>

                </div>
           
        
                <?php
            }
        }else{
            ?>
        <div class="noDoc">
                Aucun document demandé
            </div>
            <?php
        }
                  ?>
                </div>
            </div>
        </div>
       </main>
    </div>


    <div class="toastDeco">
        <h1 id="continue">
            Voulez-vous continuer de se déconnecter?
        </h1>
        <div class="confBtn">
            <button id="confDec">Oui</button>
            <button id="confDec">No</button>
        </div>
    </div>
</body>
<script src="js/scriptsess.js"></script>
<script src="js/more.js"></script>
<script src="js/json.js"></script>
<script src="js/valider.js"></script>
</html>
<?php
   }else{
   header('location:index.php');
   // echo "no validetor";
}
}else{
    header('location:index.php');
   // echo "no session available";
}
?>