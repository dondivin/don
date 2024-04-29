

<?php
$id_user = $_SESSION['user'];
include 'conn.php';
$req = "select *from accounts where id_code = '$id_user'";
$result = mysqli_query($conn,$req);
if(mysqli_num_rows($result)>0){
    foreach($result as $rows){
        $user = $rows['email'];
    }
};
$sql = "select * from personal where user = '$user'";
$res = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
            width: 100vw;
            height: 100vh;
        }
       
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <title>Profil</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
    
    <div class="menu1">
       
            <a id="phoneBg" href="profil.php?"><img src="icon/profile.svg" alt=""></a>
            <a href="map.php?"><img src="icon/address.svg" alt=""></a>
            <a href="employee.php?"><img src="icon/employee.svg" alt=""></a>
            <a href="rapport.php?"><img src="icon/rapport.svg" alt=""></a>
            <a href="formulaire.php?"><img src="icon/onenote.svg" alt=""></a>
            <a href="logout.php"><img src="icon/logout.svg" alt=""></a>
        
    </div>
    <div class="site1">
        <div class="head">
           <div class="logo"><img src="icon/agrilogo.png" alt=""></div>
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
                        <h1><?=$row['pname']?> <?=$row['psurname']?></h1>
                        </div>
                        <div><p>Statut : <?=$row['status']?></p></div>
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
                    </div>
                      <div class="data">
                        <div class="title">
                            <div class="prov">
                               <h1>PROVINCE</h1>
                            </div>
                            <div class="sper">
                                <h1>SPERFICIE</h1>
                            </div>
                           <div class="dat">
                            <h1>DATE</h1>
                           </div>
                           <div class="Other">
                            <h1>Other</h1>
                           </div>
                        </div>
                      <div class="all"> 
                       <div class="contents">
                        <div class="prov">
                            <p>KAYANZA</p>
                        </div>
                       <div class="sper">
                        <p>10ha</p>
                       </div>
                        <div class="dat">
                            <p>le 28/8/2023</p>
                        </div>
                        <div class="other">
                            <a id="update" href="#">Update</a>
                        </div>
                       </div>
                       <div class="contents">
                        <div class="prov">
                            <p>KAYANZA</p>
                        </div>
                       <div class="sper">
                        <p>10ha</p>
                       </div>
                        <div class="dat">
                            <p>le 28/8/2023</p>
                        </div>
                        <div class="other">
                            <a id="update" href="#">Update</a>
                        </div>
                       </div>
                       <div class="contents">
                        <div class="prov">
                            <p>KAYANZA</p>
                        </div>
                       <div class="sper">
                        <p>10ha</p>
                       </div>
                        <div class="dat">
                            <p>le 28/8/2023</p>
                        </div>
                        <div class="other">
                            <a id="update" href="#">Update</a>
                        </div>
                       </div>
                       <div class="contents">
                        <div class="prov">
                            <p>KAYANZA</p>
                        </div>
                       <div class="sper">
                        <p>10ha</p>
                       </div>
                        <div class="dat">
                            <p>le 28/8/2023</p>
                        </div>
                        <div class="other">
                            <a id="update" href="#">Update</a>
                        </div>
                       </div>
                       <div class="contents">
                        <div class="prov">
                            <p>KAYANZA</p>
                        </div>
                       <div class="sper">
                        <p>10ha</p>
                       </div>
                        <div class="dat">
                            <p>le 28/8/2023</p>
                        </div>
                        <div class="other">
                            <a id="update" href="#">Update</a>
                        </div>
                       </div>
                       <div class="contents">
                        <div class="prov">
                            <p>KAYANZA</p>
                        </div>
                       <div class="sper">
                        <p>10ha</p>
                       </div>
                        <div class="dat">
                            <p>le 28/8/2023</p>
                        </div>
                        <div class="other">
                            <a id="update" href="#">Update</a>
                        </div>
                       </div>
                       <div class="contents">
                        <div class="prov">
                            <p>KAYANZA</p>
                        </div>
                       <div class="sper">
                        <p>10ha</p>
                       </div>
                        <div class="dat">
                            <p>le 28/8/2023</p>
                        </div>
                        <div class="other">
                            <a id="update" href="#">Update</a>
                        </div>
                    </div> 
                       </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
       <div></div>
    </div>
    <div class="site">
        <div class="admin">
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
        <div class="main">
<div class="profil">
    <div class="h1">
        <h1>PROFIL</h1>
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
          <h1><?=$row['pname']?> <?=$row['psurname']?></h1>
              </div>
              <div>
            <p>Statut : <?=$row['status']?></p>
        </div>
        <?php
        $status = 'Administrateur';
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
             <a href="role.php?id_per=<?=$row["id"]?>">Administrateur</a>
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
        </div>
          <div class="data">
            <div class="title">
                <div class="prov">
                   <h1>PROVINCE</h1>
                </div>
                <div class="sper">
                    <h1>SPERFICIE</h1>
                </div>
               <div class="dat">
                <h1>DATE</h1>
               </div>
               <div class="Other">
                <h1>Other</h1>
               </div>
            </div>
           <div class="contents">
            <div class="prov">
                <p>KAYANZA</p>
            </div>
           <div class="sper">
            <p>10ha</p>
           </div>
            <div class="dat">
                <p>le 28/8/2023</p>
            </div>
            <div class="other">
                <a id="update" href="#">Update</a>
                <a id="delete" href="#">Delete</a>
            </div>
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
<div class="fullImg1">
        
        <img id="imgFull1" src="" alt="">
    <img id="closeIcon1" src="icon/cancel.svg" alt="">
</div>
</body>
<script src="js/profilImage.js"></script>
<script src="js/profilImage1.js"></script>
</html>