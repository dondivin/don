
<?php
include 'conn.php';
session_start();

if (isset($_SESSION['userID'])){

    if($_SESSION['validator'] === 'simple'){

$userID = $_SESSION['userID'];

$req = "SELECT * FROM personinfo INNER JOIN parentinfo on parentinfo.userID = personinfo.userID WHERE personinfo.userID = '$userID'";
$res = mysqli_query($conn,$req);

?>





<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/toast.css">
        <style>
       *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: aliceblue;

        }
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
.home h1{
    font-size: 40px;
    font-weight: 900;
  
    background-image: url(icon/uburundi.png);
    background-position: center;
    text-transform: uppercase;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
   
}
.las{
    width: 80%;
}
#pending{
    color: dodgerblue;
}
#last{
    width: 100%;
    display: flex;
    justify-content: center;
}
.residence{
    width: 100%;
    display: flex;
    justify-content: center;
}
        </style>
        <title>Accueil</title>
        <link rel="website icon" href="don/agriDigital.png">
    </head>
    
    <body>
        <div class="bg">
            <img src="photo/bg.png" alt="">
        </div>
        <div class="bigSite">


        </div>
        <div class="home">
            <header>
                <div class="logo">
                    <h1>E-CITOYEN</h1>
                </div>
                <div class="img" id="plusInfo">
                    <!--<img src="icon/plus-alt-svgrepo-com.svg" alt="">--> 
                    <span id="span"><h2 id="h2">Carte d'identité</h2></span>
                    <span id="span"><h2 id="h2">Attestation d'identite complete</h2></span>
                    <span id="span"><h2 id="h2">Extrait d'acte de naissance</h2></span>
                  
                    <span id="span"><h2 id="h2">Extrait de Marriage</h2></span>
                    <span id="span"><h2 id="h2">Attestation de bonne conduite,vie et moeurs et civisme</h2></span>
                    <span id="span"><h2 id="h2">Casier judiciaire</h2></span>
                    <span id="span"><h2 id="h2">Attestation de Résidence</h2></span>
                    <span id="span"><h2 id="h2">Attestation de dèces</h2></span>
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
        if(mysqli_num_rows($res)> 0){
            foreach($res as $row){

       
        ?>
       <div class="info">
        <h1>Nom :</h1>
        <input type="text" value="<?=$row['nom']?>" readonly>
       </div>
       <div class="info">
        <h1>Prénom :</h1>
        <input type="text" value="<?=$row['prenom']?>" readonly>
       </div>
       <div class="info">
        <h1>Date de naissance :</h1>
        <input type="text" value="<?=$row['dateNaissance']?>" readonly>
       </div>
       <div class="info">
        <h1>Lieu de naissance :</h1>
        <input type="text" value="<?=$row['lieuNaissance']?>" readonly>
       </div>
       <div class="info">
        <h1>Etat Civil :</h1>
        <input type="text" id="etat_civil" value="<?=$row['etat_civil']?>" readonly>
       </div>
       <div class="info">
        <h1>Profession :</h1>
        <input type="text" value="<?=$row['profession']?>" readonly>
       </div>
       <div class="info">
        <h1>N° C.N.I :</h1>
        <?php
        if($row['numID']=== ''){
            ?>
            <input type="text" id="id_num" value="NO ID" readonly>
            <?php
        }else{
            ?>
            <input type="text" id="id_num" value="<?=$row['numID']?>" readonly>
            <?php
        }
        ?>
       
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
        $reqDoc = "SELECT * FROM document where userID = '$userID'";
         $resDoc = mysqli_query($conn,$reqDoc);
        if(mysqli_num_rows($resDoc)> 0){
            $count = 0;
            foreach($resDoc as $row){
          $date = new DateTime($row['date_doc']);
          $dates = $date->format('d / m / Y');
          $count++;
        ?>
        <div class="docs">
        <div class="count">
               <p><?=$count?></p>
            </div>
            <div class="date">
               <p><?=$dates?></p>
            </div>
            <div class="type">
                <p id="nomDoc"><?=$row['nom_doc']?></p>
            </div>
            <div class="status">
                <?php 
                if($row['status_doc']=== 'Validé'){
                ?>
                <p id="valid" class="<?=$row['doc_sub']?>"><?=$row['status_doc']?></p>
                <?php 
                }elseif($row['status_doc']=== 'Rejeté'){
                    ?>
                 <p id="rejeter" class="<?=$row['doc_sub']?>"><?=$row['status_doc']?></p>
                    <?php
                }elseif($row['status_doc']==='Indisponible'){
                    ?>
                    <p id="unvailable" class="<?=$row['doc_sub']?>"><?=$row['status_doc']?></p>
                    <?php
                }else{
                    ?>
                     <p id="no_valid" class="<?=$row['doc_sub']?>"><?=$row['status_doc']?></p>
                    <?php
                }
                ?>
                
            </div>
            <div class="download">
            <?php 
                if($row['status_doc']=== 'Validé'){
                ?>
                <a href="<?=$row['link']?>?myDoc=<?=$row['id_doc']?>"><img src="icon/download-svgrepo-com.svg" alt="">
                    <p>Télécharger</p></a>
                <?php 
                }elseif($row['status_doc']=== 'Rejeté'){
                    ?>
                 <a id="delete" href="deleteDoc.php?id=<?=$row['id_doc']?>">Supprimer</a>
                    <?php
                }elseif($row['status_doc']==='Indisponible'){
                    ?>
                     <a href="detail.html"><img src="icon/notice.svg" alt="">
                    <p>En Détail</p></a>
                    <?php
                }else{
                    ?>
                   <p id="pending">En attente..</p>
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
<div class="selectInfo">
                

                
    <div class="logo">
        <h1>E-CITOYEN</h1>
        <div class="back">
           <p id="back">retour</p> 
        </div>
    </div>

<div class="list">
    <div class="center">
    <div class="me">
<img src="icon/user.svg" alt="">
<h2>Mon info</h2> 

<div class="check">
<div class="img">
<p id="stat">complete</p>
<img src="icon/checkmark-svgrepo-com.svg" alt="">
</div>

</div>
    </div>
    <div class="parent" id="pere">
<img src="icon/simple-parent-and-child-svgrepo-com.svg" alt="">
<h2>Père info</h2>
<div class="check">
<div class="img">
<p id="stat">complete</p>
<img src="icon/checkmark-svgrepo-com.svg" alt="">
</div>

</div>
    </div>

    <div class="parent" id="mere">
        <img src="icon/simple-parent-and-child-svgrepo-com.svg" alt="">
        <h2>Mère info</h2>
        <div class="check">
            <div class="img">
                <p id="stat">complete</p>
                <img src="icon/checkmark-svgrepo-com.svg" alt="">
            </div>
            
        </div>
                        </div>
<?php
if(mysqli_num_rows($res)>0){
    foreach($res as $row){
        if($row['etat_civil']!== 'Célibataire' && $row['etat_civil']!==""){
?>
                        <div class="me" id="conjoint">
<img src="icon/user.svg" alt="">
<h2>Conjoint(e) info</h2> 

<div class="check">
<div class="img">
<p id="stat">complete</p>
<img src="icon/checkmark-svgrepo-com.svg" alt="">
</div>

</div>
    </div>

<?php
        }else{
?>
                        <div class="">

    </div>

<?php
        }
    }
}
?>





<div class="comp">
<button id="complete">Complete</button>
</div>
</div>


<div class="monInfo">
<div class="forms">


<div class="Fname">
<div>
    <label for="">Votre nom</label>
    <input class="inputMe1  input" type="text" name="Fname" value="<?=$row['nom']?>" id="nom" required>
</div>

</div>
<div class="Fsurname">
<div>
    <label for="">Votre Prenom</label>
    <input class="inputMe1  input" type="text" name="Fprenom" value="<?=$row['prenom']?>" id="prenom" required>
</div>

</div>
<div class="Fphone">
<div>
    <label for="">Numéro de Téléphone</label>
    <input class="inputMe1  input" type="text" name="Fphone" value="<?=$row['numero']?>" id="phone" required>

</div>

</div>
<div class="Femail">
<div>
    <label for="">Email</label>
    <input class="inputMe1  input" type="email" value="<?=$row['Email']?>" name="Femail" id="email">
</div>
</div>
<div class="Faddress">
<div>
    <label for="dateNaissance">Date De naissance</label>
    <input class="inputMe1  input  myBirth" type="date" value="<?=$row['dateNaissance']?>" name="Faddress" id="" required>
    <h5 id="ageErr">Date inncorect minimum 1 ans</h5>
</div>
</div>
<div class="Fid">
<div>
    <label for="">Lieu de naissance</label>
    <input class="inputMe1  input" type="text" name="Fnum_id" value="<?=$row['lieuNaissance']?>" id="id" required>
</div>

</div>



        <div class="Fid">
    <div>

        <select id="commune" class="inputMe1">
        <?php
        if($row['ComNaissance']===''){
?>
<option value="">Commune</option>
<?php
        }else{
?>
<option value="<?=$row['ComNaissance']?>"><?=$row['ComNaissance']?></option>
<?php

        }
        ?>
            <?php
            $provID;
            $provName = $row['provNaissance'];
        $reqID = "SELECT * FROM syst_provinces WHERE PROVINCE_NAME = '$provName'";
        $resID = mysqli_query($conn, $reqID);
        if(mysqli_num_rows($resID)>0){
            foreach($resID as $row1){
                $provID = $row1['PROVINCE_ID'];
                //echo $provID;
            }
        }
         $reqCom = "SELECT * FROM syst_communes WHERE PROVINCE_ID = '$provID'";
         $resCom = mysqli_query($conn,$reqCom);
         if(mysqli_num_rows($resCom)>0){
            foreach($resCom as $row1){

                
            ?>
            <option value="<?=$row1['COMMUNE_NAME']?>"><?=$row1['COMMUNE_NAME']?></option>
            <?php
               }
            }
            ?>
        </select>
    </div>

    </div>

    <div class="Fid">
        <div>
        <select id="province" class="inputMe1">
            <option value="<?=$row['provNaissance']?>"><?=$row['provNaissance']?></option>
            <?php
            $reqProv = "SELECT * FROM syst_provinces";
         $resProv = mysqli_query($conn,$reqProv);
         if(mysqli_num_rows($resProv)>0){
            foreach($resProv as $row1){

         
            ?>
            <option value="<?=$row1['PROVINCE_NAME']?>"><?=$row1['PROVINCE_NAME']?></option>
            <?php
               }
            }
            ?>
        </select>
        </div>
    
        </div>

        <div class="Fid">
            <div>
               <select id="gender" class="inputMe1">
                <option value="<?=$row['genre']?>"><?=$row['genre']?></option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
               </select>
            </div>
      
            </div>
    
<div class="Fcountry">
<div>

    <select class="inputMe1" id="etat_civil">
    <?php
        if($row['etat_civil']===''){
?>
<option value="">Etat Civil</option>
<?php
        }else{
?>
<option value="<?=$row['etat_civil']?>"><?=$row['etat_civil']?></option>
<?php

        }
        ?>
            <option value="Célibataire">Célibataire</option>
            <option value="Marrié(e)">Marrié(e)</option>
        </select>
</div>
</div>
<div class="Fid  last" id="last">
<div>
    <label for="">Profession</label>
    <input class="inputMe1  input" type="text" name="Fnum_id" value="<?=$row['profession']?>" id="id" required>
</div>

</div>

<div class="residence">
        <div class="title">
            <h2>Résidence actuelle</h2>
        </div>
    </div>
        <div class="Fcountry">
<div>
    <label for="">zone</label>
    <input class="inputMe1  input" type="text" value="<?=$row['Residence_actu_zone']?>" name="Fcountry" id="" required>
</div>
</div>
<div class="Fcountry">
<div>
    <label for="">Quartier</label>
    <input class="inputMe1  input" type="text" value="<?=$row['Residence_actu_quarter']?>" name="Fcountry" id="" required>
</div>
</div>
<div class="Fcountry">
<div>
    <label for="">Avenue</label>
    <input class="inputMe1  input" type="text" value="<?=$row['Residence_actu_avenue']?>" name="Fcountry" id="" required>
</div>
</div>

<div class="Fid">
                <div>
                   <select id="post" class="inputMe1 inputResid  province">
                    <?php
                    if($row['Residence_actu_prov']===""){
                        ?>
                     <option value="">Province</option>
                        <?php
                    }else{
                        ?>
                         <option value="<?=$row['Residence_actu_prov']?>"><?=$row['Residence_actu_prov']?></option>
                        <?php
                    }
                    ?>
                   
             
                
                   </select>
                </div>
                </div>

                <div class="Fid">
                    <div>
                       <select id="post" class="inputMe1 inputResid  commune">
                       <?php
                    if($row['Residence_actu_com']===""){
                        ?>
                     <option value="">Commune</option>
                        <?php
                    }else{
                        ?>
                         <option value="<?=$row['Residence_actu_com']?>"><?=$row['Residence_actu_com']?></option>
                        <?php
                    }
                    ?>
                        
                 
                       </select>
                    </div>
                    </div>


      



<div class="send">
<div>
    <button class="myInfoReg" id="send1">
        <?php
        if($row['nom']=== '' || $row['prenom'] === '' || $row['numero'] === ''){
        ?>
        Enregistre
        <?php
        }else{
            ?>
            Modifier 
            <?php
        }
        ?>
        
        <img id="btnload1" src="icon/loading.svg" alt=""></button>
</div>
</div>
</div>
</div>


<div class="pereInfo">
<div class="forms">


<div class="Fname">
<div>
    <label for="">Nom de père</label>
    <input class="inputPere1  input" type="text" name="Fname" value="<?=$row['nom_pere']?>" id="nom" required>
</div>

</div>
<div class="Fsurname">
<div>
    <label for="">Prenom de la père</label>
    <input class="inputPere1  input" type="text" name="Fprenom" value="<?=$row['prenom_pere']?>" id="prenom" required>
</div>

</div>
<div class="Fphone">
<div>
    <label for="dateNaissance">Data de naissance</label>
    <input class="inputPere1  input  pereBirth" type="date" name="Fphone" value="<?=$row['date_pere']?>" id="phone" required>
    <h5 id="agePereErr">Date inncorect minimum 18 ans</h5>
</div>

</div>
<div class="Femail">
<div>
    <label for="">Profession</label>
    <input class="inputPere1  input" type="email" value="<?=$row['profession_pere']?>" name="Femail" id="email">
</div>
</div>
<div class="Faddress">
<div>
    <label for="">Résidence actuelle</label>
    <input class="inputPere1  input" type="text" value="<?=$row['residence_pere']?>" name="Faddress" id="" required>
</div>
</div>
<div class="Fid">
<div>
    <label for="">Nationalité</label>
    <input class="inputPere1  input" type="text" name="Fnum_id" value="<?=$row['nationalite_pere']?>" id="id" required>
</div>

</div>



<div class="send">
<div>
    <button class="pereReg"  id="send1">
    <?php
        if($row['nom_pere']=== '' || $row['prenom_pere'] === ''){
        ?>
        Enregistre
        <?php
        }else{
            ?>
            Modifier 
            <?php
        }
        ?>
    <img id="btnload1" src="icon/loading.svg" alt=""></button>
</div>
</div>
</div>
</div>

<div class="mereInfo">
<div class="forms">


<div class="Fname">
<div>
    <label for="">Nom de Mère</label>
    <input class="inputMere1  input" type="text" name="Fname" value="<?=$row['nom_mere']?>" id="nom" required>
</div>

</div>
<div class="Fsurname">
<div>
    <label for="">Prenom de la Mère</label>
    <input class="inputMere1  input" type="text" name="Fprenom" value="<?=$row['prenom_mere']?>" id="prenom" required>
</div>

</div>
<div class="Fphone">
<div>
    <label for="dateNaissance">Data de naissance</label>
    <input class="inputMere1  input  mereBirth" type="date" name="Fphone" value="<?=$row['date_mere']?>" id="phone" required>
    <h5 id="ageMereErr">Date inncorect minimum 18 ans</h5>
</div>

</div>
<div class="Femail">
<div>
    <label for="">Profession</label>
    <input class="inputMere1  input" type="email" value="<?=$row['profession_mere']?>" name="Femail" id="email">
</div>
</div>
<div class="Faddress">
<div>
    <label for="">Résidence actuelle</label>
    <input class="inputMere1  input" type="text" value="<?=$row['residence_mere']?>" name="Faddress" id="" required>
</div>
</div>
<div class="Fid">
<div>
    <label for="">Nationalité</label>
    <input class="inputMere1  input" type="text" name="Fnum_id" value="<?=$row['nationalite_mere']?>" id="id" required>
</div>

</div>



<div class="send">
<div>
    <button class="momInfo" id="send1">
        
    <?php
        if($row['nom_mere']=== '' || $row['prenom_mere'] === ''){
        ?>
        Enregistre
        <?php
        }else{
            ?>
            Modifier 
            <?php
        }
        ?>
    
    <img id="btnload1" src="icon/loading.svg" alt=""></button>
</div>
</div>
</div>
</div>
<?php
$request = "SELECT * FROM partenaire INNER JOIN personinfo ON partenaire.userID = personinfo.userID WHERE partenaire.userID = '$userID'";
$resReq = mysqli_query($conn, $request);

if (mysqli_num_rows($resReq) > 0) {
    foreach ($resReq as $row) {
        ?>
<div class="conjointInfo">
<div class="forms">
    
    

    
    <div class="Fname">
    <div>
        <label for="">Nom de Conjoint(e)</label>
        <input class="inputConjoint  input" type="text" name="Fname" value="<?=$row['nom_partenaire']?>" id="nom" required>
    </div>
 
    </div>
    <div class="Fsurname">
    <div>
        <label for="">Prenom de Conjoint(e)</label>
        <input class="inputConjoint  input" type="text" name="Fprenom" value="<?=$row['prenom_partenaire']?>" id="prenom" required>
    </div>
 
    </div>

    <div class="Fname">
        <div>
            <label for="">Nom & prénom du père</label>
            <input class="inputConjoint  input" type="text" name="Fname" value="<?=$row['nom_pere_partenaire']?>" id="nom" required>
        </div>
  
        </div>

        <div class="Fname">
            <div>
                <label for="">Nom & prénom de la Mère</label>
                <input class="inputConjoint  input" type="text" name="Fname" value="<?=$row['nom_mere_partenaire']?>" id="nom" required>
            </div>

            </div>
    <div class="Fphone">
    <div>
        <label for="dateNaissance">Data de naissance</label>
        <input class="inputConjoint  input  ConjointBirth" type="date" name="Fphone" value="<?=$row['partenaire_naissance']?>" id="phone" required>
        <h5 id="ageConjErr">Date inncorect minimum 18 ans</h5>
    </div>

    </div>
    <div class="Femail">
    <div>
        <label for="">Profession</label>
        <input class="inputConjoint  input" type="email" value="<?=$row['profession_partenaire']?>" name="Femail" id="email">
    </div>
    </div>
    <div class="Faddress">
    <div>
        <label for="">Résidence actuelle</label>
        <input class="inputConjoint  input" type="text" value="<?=$row['residance_partenaire']?>" name="Faddress" id="" required>
    </div>
    </div>
    <div class="Fid">
    <div>
        <label for="">Nationalité</label>
        <input class="inputConjoint  input" type="text" name="Fnum_id" value="<?=$row['nationalite_partenaire']?>" id="id" required>
    </div>
 
    </div>
    
    <div class="Fname">
    <div>
        <label for="dateNaissance">Date De marriage</label>
        <input class="inputConjoint  input" type="date" name="Fname" value="<?=$row['date_de_marriage']?>" id="nom" required>
    </div>
 
    </div>
    
    <div class="send">
    <div>
        <button class="momInfo" id="send1">
            
        <?php
            if($row['nom_partenaire']=== '' || $row['prenom_partenaire'] === ''){
            ?>
            Enregistre
            <?php
            }else{
                ?>
                Modifier 
                <?php
            }
            ?>
        
        <img id="btnload1" src="icon/loading.svg" alt=""></button>
    </div>
    </div>
    </div>
    </div>

</div>

        <?php
    }
}else{
    ?>
<h1>No disponible</h1>
    <?php
}
?>




</div>
            </main>
        </div>
    
<!---------------------------------------------------------------- toast----------------------------------------------------- -->

<div class="toast">
        <h1 id="continue">
            Voulez-vous continuer?
        </h1>
        <div class="confBtn">
            <button id="conf">Oui</button>
            <button id="conf">No</button>
        </div>
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

    <div class="toastSend">
        <h1>
        Votre demande est envoyée avec succès!
        </h1>
        <div class="confBtn">
            <button id="OK">OK</button>
           
        </div>
    </div>

    <div class="toastDocReq">
        <h1>
        Ce document a déjà été demandé!
        </h1>
        <div class="confBtn">
            <button id="bac">OK</button>
           
        </div>
    </div>





    </body>
<script src="js/label.js"></script>
<script src="js/json.js"></script>
<script src="js/script1.js"></script>
<script src="js/scriptsess.js"></script>
<script src="js/prov.js"></script>

</html>
<?php
    }else{
        echo "validator's ID";
        header('Location:logout.php');
    }
}else{
    header('Location:index.php');
}
?>