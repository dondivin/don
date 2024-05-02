<?php
include 'conn.php';
session_start();
if(isset($_SESSION['userID'])){
  $userID  = $_SESSION['userID'];
$myDoc = $_GET['myDoc'];
$myDocSan = mysqli_real_escape_string($conn, $myDoc);

 $req = "SELECT * FROM personinfo INNER JOIN systpost ON personinfo.provNaissance=systpost.province_post AND personinfo.ComNaissance=systpost.commune_post INNER JOIN parentinfo on personinfo.userID = parentinfo.userID INNER JOIN document ON document.userID = personinfo.userID AND document.id_doc = '$myDocSan' WHERE personinfo.userID = '$userID' AND systpost.post = 'ADC'";
$res = mysqli_query($conn,$req);
if(mysqli_num_rows($res)>0){
  foreach($res as $row){
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .body #bonne{
            padding-bottom: 20px;
            line-height: 1.2;
            font-weight: 500;
        }
        .doc main .body{
            
        }
        b{
         padding:0 3px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/doc1.css">
    <title>Attestation</title>
</head>
<body>
    <div class="doc">

 
    <header>
    <div class="info">
        <h1>REPUBLIQUE DU BURUNDI</h1>
        <div class="img">
            <img src="photo/unite.jpg" alt="">
        </div>
        <h1>MINISTERE DE L'INTERIEUR,DU DEVELOPPEMENT COMMUNAUTAIRE ET DE LA SECURITE PUBLICQUE</h1>
        <h1>PROVINCE DE <?=$row['provNaissance']?></h1>
        <h1>COMMUNE <?=$row['ComNaissance']?></h1>
        
    </div>
    </header>
    <main>
    <div class="title">
       <h1>ATTESTATION D'IDENTITE COMPLETE</h1>
    </div>
    <div class="body">
     <h1 id="bonne">je soussigné <b><?=$row['nomGov']?> <?=$row['prenomGov']?></b>,administateur Communal à <b><?=$row['commune_post']?></b>
         en Province de <b><?=$row['province_post']?></b>,atteste par la présente que l'identité complete du nommé <b><?=$row['nom']?> <?=$row['prenom']?></b>est la suivante :</h1>
         <div class="infoPerson">
           <h1>Nom</h1><h1>: <?=$row['nom']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Prénom</h1>
            <h1>: <?=$row['prenom']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Nom et Prénom du Père</h1>
            <h1>: <?=$row['nom_pere']?> <?=$row['prenom_pere']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Nom De la Mère</h1>
            <h1>: <?=$row['nom_mere']?> <?=$row['prenom_mere']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Date et Lieu de naissance</h1>
            <?php
            $date = new DateTime($row['dateNaissance']);
            $dates = $date->format('Y');
            ?>
            <h1>: <?=$row['lieuNaissance']?>, en <?=$dates?></h1>
         </div>
         <div class="infoPerson">
            <h1>Commune</h1>
            <h1>: <?=$row['ComNaissance']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Province</h1>
            <h1>: <?=$row['provNaissance']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Etat-civil</h1>
            <h1>: <?=$row['etat_civil']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Profession</h1>
            <h1> : <?=$row['profession']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Nationalité</h1>
            <h1>: <?=$row['nationalite']?></h1>
         </div>
         <div class="infoPerson">
            <h1>Résidence actuelle</h1>
            <h1>: <?=$row['Residence_actu_zone']?>,Commune <?=$row['Residence_actu_com']?> et Province <?=$row['Residence_actu_prov']?></h1>
         </div>
       
    </div>
    <div class="more">
    
       
        <h1>La présente attestation lui est délivrée 
            au vu de sa carte nationale d'identité portant le numéro <b><?=$row['numID']?></b> 
        délivrée à <b><?=$row['wherederiveryID']?></b> Le <b><?=$row['derivryDate']?></b></h1>
    </div>
    </main>
    <footer>
<div class="info">
    <h1>Fait à <b><?=$row['province_post']?></b>,le <b><?=$row['date_valid']?></b></h1>
    <h1>L'Administrateur Communal à <b><?=$row['commune_post']?></b></h1>
        <h1 id="off"><?=$row['nomGov']?> <?=$row['prenomGov']?></h1>
    
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