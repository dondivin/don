<?php
include 'conn.php';
session_start();
if(isset($_SESSION['userID'])){
    $userID  = $_SESSION['userID'];
    $myDoc = $_GET['myDoc'];
    $myDocSan = mysqli_real_escape_string($conn, $myDoc);
    
     $req = "SELECT * FROM document INNER JOIN personinfo ON document.userID = personinfo.userID INNER JOIN parentinfo ON parentinfo.userID = document.userID INNER JOIN partenaire ON partenaire.userID = document.userID INNER JOIN systpost ON systpost.post = document.validetor WHERE document.id_doc = '$myDocSan'";
    $res = mysqli_query($conn,$req);
    if(mysqli_num_rows($res)>0){
      foreach($res as $row){
        $date = new DateTime($row['dateNaissance']);
        $year = $date->format('Y');
        $month = $date->format('m');
        $day = $date->format('d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/casier.css">
    <title>Casier judiciaires</title>
</head>
<body>
    <div class="doc">

 
    <header>
    <div class="info">
        <h1>REPUBLIQUE DU BURUNDI</h1>
        <div class="img">
            <img src="photo/unite.jpg" alt="">
        </div>
        <h1>POLICE NATIONALE DU BURUNDI</h1>
        <h1>COMMISSARIAT GENERAL DE LA POLICE JUDICIAIRE</h1>
        
        
    </div>
    </header>
    <main>
    <div class="title">
       <h1>DECLARATION</h1>
    </div>
    <div class="body">
     <h1 id="bonne">je soussigné </h1>
         <div class="infoPerson">
           <h1>Nom et Prénom</h1><h1>: <?=$row['nom']?> <?=$row['prenom']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Né(e) </h1>
            <h1>: <?=$year?></h1>
         </div>
         <div class="infoPerson">
            <h1>Fils(Fille) de </h1>
            <h1>: <?=$row['nom_pere']?> <?=$row['prenom_pere']?> et de <?=$row['nom_mere']?> <?=$row['prenom_mere']?></h1>
         </div>
    
       
         <div class="infoPerson" id="div">
            <div>
                <h2>Colline</h2>
                <h2>: <?=$row['lieuNaissance']?></h2>
            </div>
            <div>
                <h3>Commune</h2>
                <h3>: <?=$row['ComNaissance']?></h2>
            </div>
            
         </div>
         <div class="infoPerson">
            <h1>Province</h1>
            <h1>: <?=$row['provNaissance']?></h1>
         </div>
         <div class="infoPerson" id="div">
            <div>
                <h2>Nationalité</h2>
                <h2>: <?=$row['nationalite']?></h2>
            </div>
            <div>
                <div class="infoPerson">
                    <h3>Profession</h2>
                    <h3> : <?=$row['profession']?></h2>
                 </div>
            </div>
            
         </div>
         <div class="infoPerson">
            <h1>Résidence à </h1>
            <h1>: <?=$row['Residence_actu_zone']?>,Commune <?=$row['Residence_actu_com']?> et Province <?=$row['Residence_actu_prov']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Nom du Conjoint</h1>
            <?php
            if($row['etat_civil'] !== 'Célibataire'){
            ?>
            <h1>: <?=$row['nom_partenaire']?> <?=$row['prenom_partenaire']?></h1>
            <?php
            }else{
                ?>
                <h1>: Célibataire</h1> 
                <?php 
            }
            ?>
         </div>
       <div class="enno">

      
     <p id="enno">
        Certifié sur l'honneur n'avoir à ce jour
         encouru aucun condamnation no au territoire
          de la République du Burundi ni à l'étranger
        </p>
     <h1>Bujumbura,Le <?=$row['first_date_valid']?></h1>
    </div>
    
       
    </div>
    <div class="more">
    <div class="title">
        <h1>ATTESTATION</h1>
    </div>
       <?php
         $reqPg = "SELECT * FROM systpost where post = 'PG'";
         $resPg = mysqli_query($conn,$reqPg);
         foreach($resPg as $row1){

        
       ?>
        <p>Je soussigné <b><?=$row1['nomGov']?> <?=$row1['prenomGov']?></b>,Procureur Général
             de la République du Burundi à BUJUMBURA,après avoir consulté la documentation à notre possession :</p>
             <p>Certifions que le(la) susnormmé(e) n'a à notre connaissance
                 encouru aucune condamnation durant son Séjour dans la République du BURUNDI</p>
                 <?php
         }
         ?>
    </div>
    </main>
    <footer>
<div class="info">
    <p>Casier judiciaire</p>
    <p>Antécédent judiciaire à <b> <?=$row['bonne_conduite']?></b></p>
    <h1>Bujumbura,le <?=$row['date_valid']?></h1>
    <p>Le Procureur Général de la République du BURUNDI par délégation :</p>
    <p>Le commissaire Général de la Police Judiciaires</p>
        <h1 id="off"><?=$row['nomGov']?> <?=$row['prenomGov']?></h1>
        <h1>Général Major de Police</h1>
    
</div>
    </footer>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
<script src="js/exportDoc.js"></script>
</html>
<?php
      }
    }

}else{
  header('Location:index.php');
}
?>