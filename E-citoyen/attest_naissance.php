<?php
include 'conn.php';
session_start();
if(isset($_SESSION['userID'])){
    $userID  = $_SESSION['userID'];
    $myDoc = $_GET['myDoc'];
    $myDocSan = mysqli_real_escape_string($conn, $myDoc);
    
     $req = "SELECT * FROM personinfo INNER JOIN systpost ON personinfo.provNaissance=systpost.province_post AND personinfo.ComNaissance=systpost.commune_post INNER JOIN parentinfo on personinfo.userID = parentinfo.userID INNER JOIN document ON document.userID = personinfo.userID AND document.id_doc = '$myDocSan' WHERE personinfo.userID = '$userID' AND systpost.post = 'OECA'";
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

    <link rel="stylesheet" href="css/doc2.css">
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
        <h1>ACTE : 179</h1>
        <h1>VOLUME : 45</h1>
    </div>
    </header>
    <main>
    <div class="title">
       <h1>Extrait d'Acte de Naissance</h1>
    </div>
    <div class="body">
L'an <h2 id="ans"><?=$year?></h2>
le <h2 id="jour"><?=$day?></h2>jour du mois de <h2 id="mois"><?=$month?></h2>Est né(e) à <h2><?=$row['lieuNaissance']?></h2>
Le(la) nommé(e) <h2><?=$row['nom']?> <?=$row['prenom']?></h2> fils(fille) de<h2><?=$row['nom_pere']?> <?=$row['prenom_pere']?></h2> Age de  <h2 id="agePere"><?=$row['date_pere']?></h2>ans
 profession <h2><?=$row['profession_pere']?></h2>
Résidant à <h2><?=$row['residence_pere']?></h2> de nationalité <h2><?=$row['nationalite_pere']?></h2>Et de 
<h2><?=$row['nom_mere']?> <?=$row['prenom_mere']?></h2> 
Agé de <h2 id="ageMere"><?=$row['date_mere']?></h2>Ans Profession <h2><?=$row['profession_mere']?></h2>
Résidant à <h2><?=$row['residence_mere']?></h2>
de nationalité <h2><?=$row['nationalite_mere']?></h2>
    </div>
    </main>
    <footer>
<div class="info">
    <h1>POUR EXTRAIT CERTIFIE COMFORME</h1>
    <h1>Fait à <?=$row['province_post']?>,le <?=$row['date_valid']?></h1>
    <h1>L'OFFICIER D'ETAT CIVIL ADJOINT,</h1>
        <h1 id="off"><?=$row['nomGov']?> <?=$row['prenomGov']?></h1>
    
</div>
    </footer>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
<script src="js/exportDoc.js"></script>
<script src="js/json.js"></script>
</html>

<?php
      }
    }

}else{
  header('Location:index.php');
}
?>