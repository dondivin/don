<?php
include 'conn.php';
session_start();
if(isset($_SESSION['userID'])){
  $userID  = $_SESSION['userID'];


 $req = "SELECT * FROM personinfo INNER JOIN parentinfo ON personinfo.userID = parentinfo.userID WHERE personinfo.userID = '$userID'";
$res = mysqli_query($conn,$req);
if(mysqli_num_rows($res)>0){
  foreach($res as $row){
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/carte.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carté</title>
</head>
<body>
    <div class="carte">
        <div class="info">
          <div class="myinfo">
            <h1>IZINA :</h1>
            <h2><?=$row['nom']?></h2>
          </div>
          <div class="myinfo">
            <h1>AMATAZIRANO :</h1>
            <h2><?=$row['prenom']?></h2>
          </div>
          <div class="myinfo">
            <h1>SE :</h1>
            <h2><?=$row['nom_pere']?> <?=$row['prenom_pere']?></h2>
          </div>
          <div class="myinfo">
            <h1>NYINA :</h1>
            <h2><?=$row['nom_mere']?> <?=$row['prenom_mere']?></h2>
          </div>
          <div class="myinfo">
            <h1>PROVINSI :</h1>
            <h2><?=$row['provNaissance']?></h2>
          </div>
          <div class="myinfo">
            <h1>KOMINE :</h1>
            <h2><?=$row['ComNaissance']?></h2>
          </div>
          <div class="myinfo">
            <h1>YAVUKIYE :</h1>
            <h2><?=$row['lieuNaissance']?></h2>
          </div>
          <div class="myinfo">
            <h1>ITALIKI :</h1>
            <h2><?=$row['dateNaissance']?></h2>
          </div>
          <div class="myinfo">
            <h1>ARUBATSE :</h1>
            <?php
            if($row['etat_civil']=== "Marrié(e)"){
?>
            <h2>EGO</h2>
            <?php
            }else{
              ?>
              <h2>OYA</h2>
              <?php
            }
            ?>
            
          </div>
          <div class="myinfo">
            <h1>AKAZI AKORA :</h1>
            <h2><?=$row['profession']?></h2>
          </div>
       
        </div>
        <div class="img">

         <div class="finger">
           <h1>IGIKUMU CA NYENEYO</h1>
         </div>
         <div class="photo">
         <div class="cadre">
            <img src="photo/divin.jpg" alt="">
         </div>
         </div>
         <div class="cacher">
          <h1>IKASHE</h1>
         </div>

        </div>
        <div class="table">
          <div class="limTable">
        <div class="tab" id="bold">
           <h1>AHO Y'IKWIRIKIRANIJE KUBA</h1>
        </div>
        <div class="tab" id="bold1">
          <div><h1>ITALIKI</h1></div>
          <div><h1>UMUSOZI</h1></div>
          <div><h1>KOMINE</h1></div>
          <div class="border"><h1>PROVENSI</h1></div>
        </div>
        <div class="tab">
          <div></div>
          <div></div>
          <div></div>
          <div class="border"></div>
        </div>
        <div class="tab">
          <div></div>
          <div></div>
          <div></div>
          <div class="border"></div>
        </div>
        <div class="tab">
          <div></div>
          <div></div>
          <div></div>
          <div class="border"></div>
        </div>
        <div class="tab">
          <div></div>
          <div></div>
          <div></div>
          <div class="border"></div>
        </div>
        <div class="tab">
          <div></div>
          <div></div>
          <div></div>
          <div class="border"></div>
        </div>
        </div>
      </div>
    </div>
    <div class="carte1">
      <div class="info">
       <div class="idInfo" >
        <h1 id="rep">REPUBLIQUE DU BURUNDI</h1>
       </div>
       <div class="idInfo" >
         <h1 id="nom">IKARATA KARANGAMUNTU</h1>
       </div>
       <div class="idInfo">
        <h1>N° MIFPDL</h1>
        <h2><?=$row['numID']?></h2>
       </div>
       <div class="idInfo">
       <h1>ITANGIWE</h1>
       <h2><?=$row['wherederiveryID']?></h2>
       </div>
       <div class="idInfo">
        <h1>ITALIKI</h1>
        <h2><?=$row['derivryDate']?></h2>
       </div>
       <div class="idInfo" id="double">
        <div>
          <h1>UWUYITANZE</h1>
          <h2>MUSITANTERI</h2>
        </div>
        <div id="admin">
          <?php
            $findADC = "SELECT * FROM personinfo INNER JOIN systpost ON personinfo.provNaissance=systpost.province_post AND personinfo.ComNaissance=systpost.commune_post WHERE personinfo.userID = '$userID' AND systpost.post = 'ADC'";
            $foundADC = mysqli_query($conn,$findADC);
            if(mysqli_num_rows($foundADC)>0){
              foreach($foundADC as $row1){
          ?>
          <h2><?=$row1['nomGov']?> <?=$row1['prenomGov']?></h2>
          <?php
             }
            }
            ?>
        </div>
       
       </div>
    
     
      </div>
      <div class="img">

       
      </div>
      <div class="table">
        <div class="limTable">
      <div class="tab" id="bold">
         <h1>AHO Y'IKWIRIKIRANIJE KUBA</h1>
      </div>
      <div class="tab" id="bold1">
        <div><h1>ITALIKI</h1></div>
        <div><h1>UMUSOZI</h1></div>
        <div><h1>KOMINE</h1></div>
        <div class="border"><h1>PROVENSI</h1></div>
      </div>
      <div class="tab">
        <div></div>
        <div></div>
        <div></div>
        <div class="border"></div>
      </div>
      <div class="tab">
        <div></div>
        <div></div>
        <div></div>
        <div class="border"></div>
      </div>
      <div class="tab">
        <div></div>
        <div></div>
        <div></div>
        <div class="border"></div>
      </div>
      <div class="tab">
        <div></div>
        <div></div>
        <div></div>
        <div class="border"></div>
      </div>
      <div class="tab">
        <div></div>
        <div></div>
        <div></div>
        <div class="border"></div>
      </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
<script src="js/exportDoc1.js"></script>
</html>
<?php
  }
}
}else{
  header('Location:index.php');
}
?>