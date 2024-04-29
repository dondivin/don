
<?php
session_start();
$id_user = $_SESSION['user'];

if(isset($_SESSION['user'])){



include 'conn.php';

$sql = mysqli_query($conn,"select * from rapport where id_code = '$id_user'");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        }
        body{
          width: 100vw;
            height: 100vh;
            background: aliceblue;
        }
      
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/myactivity.css">
    <link rel="stylesheet" href="css/loading.css">
 
    <title>Rapport</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
    <div class="bigSite">
    <div class="rap">
        <div class="header">
            <div class="logo">
                <img src="icon/agrilogo.png" alt="">
            </div>
             <div class="link">
                <a id="phoneBg" href="profil.php?"><img src="icon/profile.svg" alt=""><p>Profil</p></a>
                <a href="map.php?"><img src="icon/address.svg" alt=""><p>Map</p></a>
                <a href="employee.php?"><img src="icon/employee.svg" alt=""><p>compte</p></a>
                <a href="rapport.php?"><img src="icon/rapport.svg" alt=""><p>Rapport</p></a>
                <a href="formulaire.php?"><img src="icon/onenote.svg" alt=""><p>Identification</p></a>
                <a href="logout.php"><img src="icon/logout.svg" alt=""><p>Logout</p></a>
             </div>
        </div>
        <div class="main">
    <div class="history">
        <div class="p">
           <h1>HISTORY</h1>
           <form>
           <div class="year">
            <div class="refresh">
            <a href="activity.php"><img src="icon/refresh.svg" alt=""></a>
            <p>Refresh</p>
            </div>

         <input type="number" name="year" placeholder="Entrer l'année" required>
        <div>
            <div class="recherch">
            <button type="submit" name="search"><img src="icon/search.svg"  alt=""></button> 
            <p>Recherch</p>
            </div>
      
        </div>
        </form>
           </div>
        </div>
          <div class="data">
            <div class="title">
                <div class="id">
                    <h1>#</h1>
                </div>
                <div class="prov">
                   <h1>PROVINCE</h1>
                </div>
                <div class="com">
                   <h1>COMMUNE</h1>
                </div>
                <div class="colin">
                   <h1>COLLINE</h1>
                </div>
                <div class="typeCul">
                   <h1>TYPE DE CULTURE</h1>
                </div>
                <div class="sper">
                    <h1>SPERFICIE</h1>
                </div>
                <div class="Categ">
                   <h1>CATEGORIE</h1>
                </div>
                <div class="certKg">
                   <h1>IGITIGIRI/Kg</h1>
                </div>
                <div class="saison">
                   <h1>SAISON</h1>
                </div>
               <div class="dat">
                <h1>DATE</h1>
               </div>
            </div>
     <div class="contente">



     <?php

if(isset($_REQUEST['search'])){
    $count = 1;
    $year = $_REQUEST['year'];
    $yearSanitized = mysqli_real_escape_string($conn,$year);
$search = mysqli_query($conn,"select * from rapport where year(date)='".$yearSanitised."' AND id_code = '$id_user'");
if(mysqli_num_rows($search)>0){
    foreach($search as $now){

?>
        <div class="contents">
        <div class="id">
                <p><?=$count?></p>
            </div>
            <div class="prov">
                <p><?=$now['province']?></p>
            </div>
            <div class="com">
                   <p><?=$now['commune']?></p>
                </div>
                <div class="colin">
                   <p><?=$now['colline']?></p>
                </div>
                <div class="typeCul">
                   <p><?=$now['type_culture']?></p>
                </div>
           <div class="sper">
            <p><?=$now['sperficie']?> <?=$now['mesure']?></p>
           </div>
           <div class="Categ">
                   <p><?=$now['categorie']?></p>
                </div>
                <div class="certKg">
                   <p><?=$now['imbuto']?></p>
                </div>
                <div class="saison">
                   <p><?=$now['saison']?></p>
                </div>
            <div class="dat">
                <p>le <?=$now['date']?></p>
            </div>
           </div>


           <?php
           $count++;
            }
        }else{
            echo '<h1 style="
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%);
            color: #00000094;
        ">Aucune donnée de cet année</h1>';
        }
    }else if(mysqli_num_rows($sql)>0){
        $count = 1;
    foreach($sql as $rows){
  


?>
        <div class="contents">
        <div class="id">
                <p><?=$count?></p>
            </div>
           
            <div class="prov">
                <p><?=$rows['province']?></p>
            </div>
            <div class="com">
                   <p><?=$rows['commune']?></p>
                </div>
                <div class="colin">
                   <p><?=$rows['colline']?></p>
                </div>
                <div class="typeCul">
                   <p><?=$rows['type_culture']?></p>
                </div>
           <div class="sper">
            <p><?=$rows['sperficie']?> <?=$rows['mesure']?></p>
           </div>
           <div class="Categ">
                   <p><?=$rows['categorie']?></p>
                </div>
                <div class="certKg">
                   <p><?=$rows['imbuto']?></p>
                </div>
                <div class="saison">
                   <p><?=$rows['saison']?></p>
                </div>
            <div class="dat">
                <p>le <?=$rows['date']?></p>
            </div>
           </div>


           <?php
           $count++;
            }
        }
        ?>
           
        </div>
    </div>
</div>
</div>
</div>  




    </div>


    <div class="load">
        <div class="img">
            <div>
                <img src="icon/agrilogo.png" alt="">
            </div>
        </div>
        <div class="loading">
        <div>
            <div></div>
        </div>
        <p>loading...</p>
        </div>
    </div>







</body>
<script src="js/load.js"></script>
<script src="js/translateMenu.j"></script>
</html>
<?php
}else{
    echo "Loging first";

   // echo '<a href="index.php">Login</a>';
   header('location:noAccount.html');

}
?>