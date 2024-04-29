
<?php
session_start();
$id_user = $_SESSION['user'];
include 'conn.php';
$req = "select *from accounts where id_code = '$id_user'";
$result = mysqli_query($conn,$req);
if(mysqli_num_rows($result)>0){
    foreach($result as $rows){
        $user = $rows['email'];
    }
};
$sql = "select * from personal where id_code = '$id_user'";
$res = mysqli_query($conn,$sql);
if(isset($_SESSION['user'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" href="css/role.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        body{
            background-color: aliceblue;
            
        }
       
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <title>Profil</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
<div class="bigSite">
    <div class="menu1">
       
            <a id="phoneBg" href="profil.php?"><img src="icon/profile.svg" alt=""><p id="smartMenu">Profil</p></a>
            <a href="map.php?"><img src="icon/address.svg" alt=""><p id="smartMenu">Map</p></a>
            <a href="employee.php?"><img src="icon/employee.svg" alt=""><p id="smartMenu">Compte</p></a>
            <a href="rapport.php?"><img src="icon/rapport.svg" alt=""><p id="smartMenu">Rapport</p></a>
            <a href="formulaire.php?"><img src="icon/onenote.svg" alt=""><p id="smartMenu">Identification</p></a>
            <a href="recolte.php"><img src="icon/farm.svg" alt=""><p id="smartMenu">Recolte</p></a>
        
    </div>
    <div class="site1">
        <div class="head">
           <div class="logo"><img src="icon/agrilogo.png" alt=""></div>



           <div class="opt">
        <img id="opt" src="icon/menu.svg" alt="">
        <div class="op">
            <?php
  $req=mysqli_query($conn,"select * from personal where id_code = '$id_user'");
        
  if(mysqli_num_rows($req)>0){
      foreach($req as $requ){
          if($requ['status']=='AdminGrantor' || $requ['status']=='Administrateur'){

            ?>
            <a href="activity.php?"><div><img src="icon/rapport.svg" alt=""></div><h1>Rapport</h1></a>
            <?php
          }
        }
    };
        ?>
            <a href="changeLanguage.php?"><div><img src="icon/world.svg" alt=""></div><h1>Change langue</h1></a>
            <a href="logout.php"><div><img src="icon/logout.svg" alt=""></div><h1>Logout</h1></a>
            </div>
        </div>


        </div>
        <div class="main">
        <?php
    if(mysqli_num_rows($res)>0){
        foreach($res as $row){
    ?>
            <div class="profil">
                <div class="content">
                    <div class="img">
                        <div class="photo">
                            <img id="profil1" src="profil/<?=$row['profil']?>" alt="">
                        </div>
                        
                    </div>
                    <div class="name">
                        
                        <div>
                       <a href="CV.php?bool=pro"><h1><?=$row['pname']?> <?=$row['psurname']?></h1></a> 
                        </div>
                        <div><p>Categorie : <?=$row['typ_agriculteur']?></p></div>
                    </div>
                    <?php
        }
        ?>
                     <?php
        }
        ?>
                    <div class="history">
                    <div class="p">
                       <h1>HISTORY</h1>
                       <a href="myactivity.php">Rapport</a>
                    </div>
                      <div class="data">
                        <div class="title">
                            <div class="id">
                                <h1>#</h1>
                            </div>
                            <div class="prov">
                               <h1 id="prov">PROVINCE</h1>
                            </div>
                            <div class="sper">
                                <h1 id="sper">SPERFICIE</h1>
                            </div>
                           <div class="dat">
                            <h1 id="date">DATE</h1>
                           </div>
                           <div class="Other">
                            <h1 id="other">Autre</h1>
                           </div>
                        </div>
                      <div class="all"> 

                      <?php 
          $search = "select * from accounts where id_code = '$id_user'";
          $found = mysqli_query($conn,$search);
          if(mysqli_num_rows($found)>0){
            foreach($found as $col){
                $email = $col['email'];
            }
          };
          $req = "select * from rapport where id_code = '$id_user'";
          $find = mysqli_query($conn,$req);
          $count = 1;
          if(mysqli_num_rows($find)>0){
            foreach($find as $cols){
?>
                       <div class="contents">
                        <div class="id">
                            <p><?=$count?></p>
                        </div>
                        <div class="prov">
                            <p><?=$cols['province']?></p>
                        </div>
                       <div class="sper">
                        <p><?=$cols['sperficie']?> <?=$cols['mesure']?></p>
                       </div>
                        <div class="dat">
                            <p><?=$cols['date']?></p>
                        </div>
                        <div class="other">
                            <a id="update" href="update.php?id_rap=<?=$cols['id']?>">Update</a>
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
        </div>
       <div></div>
    <div class="site">

    <div class="mini">
        <div id="bg1"><img src="icon/profile.svg" alt=""></div>
        <div ><img src="icon/address.svg" alt=""></div>
        <div><img src="icon/employee.svg" alt=""></div>
        <div><img src="icon/rapport.svg" alt=""></div>
        <div><img src="icon/onenote.svg" alt=""></div>
        <div><img src="icon/logout.svg" alt=""></div>
    </div>



        <div class="admin">
        <div class="canc">
<img src="icon/close.png" alt="">
    </div>
<div class="logo">
   <img src="icon/agrilogo.png" alt="">
</div>
<div class="menu">
    <ul>
        <li ><a id="bg" href="profil.php?"><div><img id="imgP" src="icon/profile.svg" alt=""></div><div class="h1">Profile</div></a></li>
        <li><a href="map.php?"><div><img src="icon/address.svg" alt=""></div><div class="h1">Map</div></a></li>
        <li><a href="employee.php?"><div><img src="icon/employee.svg" alt=""></div><div class="h1">Compte</div></a></li>
        <li><a href="rapport.php?"><div><img src="icon/rapport.svg" alt=""></div><div class="h1">Rapport</div></a></li>
        <li><a href="formulaire.php?"><div><img src="icon/onenote.svg" alt=""></div><div class="h1">Identification</div></a></li>
        <li><a href="recolte.php"><div><img src="icon/farm.svg" alt=""></div><div class="h1">Recolte</div></a></li>
    </ul>
</div>
        </div>
        <div id="main" class="main">
<div class="profil">
    <div class="h1">
        <h1 id="prof">PROFIL</h1>
        <div class="opt">
            <p>Autre Options</p>
        <img id="opt" src="icon/menu.svg" alt="">
        <div class="op">
            <?php
  $req=mysqli_query($conn,"select * from personal where id_code = '$id_user'");
        
  if(mysqli_num_rows($req)>0){
      foreach($req as $requ){
          if($requ['status']=='AdminGrantor' || $requ['status']=='Administrateur'){

            ?>
            <a href="activity.php"><div><img src="icon/rapport.svg" alt=""></div><h1>Rapport</h1></a>
            <a href="recoltReport.php"><div><img src="icon/farm.svg" alt=""></div><h1>Recolte</h1></a>
            <?php
          }
        }
    };
        ?>
            <a href="changeLanguage.php?"><div><img src="icon/world.svg" alt=""></div><h1>Change langue</h1></a>
            <a href="logout.php"><div><img src="icon/logout.svg" alt=""></div><h1>Logout</h1></a>
            </div>
        </div>
    </div>
    <?php
    if(mysqli_num_rows($res)>0){
        foreach($res as $row){
    ?>
    <div class="content">
        <div class="img">
            <div class="photo">
                <img id="img" src="profil/<?=$row['profil']?>" alt="">
            </div>
            
        </div>
        <div class="name">
       
         <div>
         <a href="CV.php?bool=pro"> <h1><?=$row['pname']?> <?=$row['psurname']?></h1></a>
              </div>
              <div>
            <p id="capt">Categorie : <?=$row['typ_agriculteur']?></p>
        </div>
        <?php
        $status = 'AdminGrantor';
        $sqls = "select * from personal";
        $check = false;
        $find = mysqli_query($conn,$sqls);
        if(mysqli_num_rows($find)>0){
            foreach($find as $row1){
                if($row1['status'] == $status){
                    $check = true;
                }
            }
        };
           if($check == true){

           }else{
            ?>
            <div class="role">
            <div>
             <a href="role.php?id_per=<?=$row["id"]?>">AdminGrantor</a>
            </div>
         </div>
         <?php
           }
           ?>
      
        </div>
        <?php
        }
        ?>
        <?php
    }
    ?>
        <div class="history">
        <div class="p">
           <h1>HISTORY</h1>
           <a href="myactivity.php">Rapport</a>
        </div>
          <div class="data">
            <div class="title">
                <div class="id">
                    <h1>#</h1>
                </div>
                <div class="prov">
                   <h1 id="prov">PROVINCE</h1>
                </div>
                <div class="com">
                   <h1 id="com">COMMUNE</h1>
                </div>
                <div class="colin">
                   <h1 id="coll">COLLINE</h1>
                </div>
                <div class="typeCul">
                   <h1 id="typ_cul">TYPE DE CULTURE</h1>
                </div>
                <div class="sper">
                    <h1 id="sper">SPERFICIE</h1>
                </div>
                <div class="Categ">
                   <h1 id="categ">CATEGORIE</h1>
                </div>
                <div class="CertKg">
                   <h1 id="certKg">IGITIGIRI/Kg</h1>
                </div>
                <div class="saison">
                   <h1 id="saison">SAISON</h1>
                </div>
               <div class="dat">
                <h1 id="date">DATE</h1>
               </div>
               <div class="Other">
                <h1 id="other">Autre</h1>
               </div>
            </div>
            <div class="contente">

          <?php 
          $search = "select * from accounts where id_code = '$id_user'";
          $found = mysqli_query($conn,$search);
          if(mysqli_num_rows($found)>0){
            foreach($found as $col){
                $email = $col['email'];
            }
          };
          $req = "select * from rapport where id_code = '$id_user'";
          $find = mysqli_query($conn,$req);
          $count = 1;
          if(mysqli_num_rows($find)>0){
            foreach($find as $cols){
              
?>

           <div class="contents">
            <div class="id">
                <p><?=$count?></p>
            </div>
            <div class="prov">
                <p><?=$cols['province']?></p>
            </div>
            <div class="com">
                   <p><?=$cols['commune']?></p>
                </div>
                <div class="colin">
                   <p><?=$cols['colline']?></p>
                </div>
                <div class="typeCul">
                   <p><?=$cols['type_culture']?></p>
                </div>
           <div class="sper">
            <p><?=$cols['sperficie']?> <?=$cols['mesure']?></p>
           </div>
           <div class="Categ">
                   <p><?=$cols['categorie']?></p>
                </div>
                <div class="certKg">
                <p><?=$cols['imbuto']?></p>
                </div>
                <div class="saison">
                   <p><?=$cols['saison']?></p>
                </div>
            <div class="dat">
                <p>le <?=$cols['date']?></p>
            </div>
            <div class="other">
                <a id="update" href="update.php?id_rap=<?=$cols['id']?>">Update</a>
            </div>
           </div>
<?php
 $count++;
            }
           
            ?>
            <?php
            }
            ?>
           
           </div>
          </div>
        </div>
    </div>
</div>
        </div>
    </div>
    <div class="fullImg">
        
        <img id="imgFull" src="" alt="">
    <img id="closeIcon" src="icon/cancel.svg" alt="">
</div>
<?php
$lang = mysqli_query($conn,"select * from setlang where id_code = '$id_user'");

if(mysqli_num_rows($lang)>0){
    foreach($lang as $langs){
        ?>
<input type="text" value="<?=$langs['mode']?>" id="lang" hidden>
        <?php
    }
}
?>

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

<script src="js/profilImage.js"></script>
<script src="js/translate.js"></script>
<script src="js/menuOption.js"></script>
<script src="js/mini.js"></script>
<script src="js/load.js"></script>
</html>
<?php
}else{
    echo "Loging first";

   // echo '<a href="index.php">Login</a>';
   header('location:noAccount.html');

}
?>