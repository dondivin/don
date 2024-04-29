
<?php
session_start();
$id_user = $_SESSION['user'];


if(isset($_SESSION['user'])){



include 'conn.php';

$sql1;
$sql = "select * from personal where id_code = '$id_user'";


$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)===1){
  foreach($res as $row){

if($row['typ_agriculteur']==='Umugwizambuto'){
    $sql1 = mysqli_query($conn,"select * from recolt_semance");
}else if($row['typ_agriculteur']==='Umurimyi'){
    $sql1 = mysqli_query($conn,"select * from recolt_semance");
}else{
    echo 'Error occcur';
}

    
  }
}



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
            max-width: 100vw;
            min-width: 1500px;
            height: 100vh;
            background: aliceblue;
        }
      
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/recolt.css">
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Recolte</title>
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
        <div class="provnc">
            <div class="dropDown"><h1>Selectionner</h1><img id="drop" src="icon/arrow-down.svg" alt=""></div>
        <ul id="dropUl">

<?php
  
  $culSql = "select * from type_culture";
  $res = mysqli_query($conn,$culSql);


?>




<li><a href="selectProv.php?prov=BUJUMBURA-MAIRIE">BUJUMBURA-MAIRIE</a><img id="drop" src="icon/arrow-down.svg" alt="">
            <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=BUJUMBURA-MAIRIE"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?>
           </li>
            <li><a href="selectProv.php?prov=BUJUMBURA-RURAL">BUJUMBURA-RURAL</a><img id="drop" src="icon/arrow-down.svg" alt="">
            <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=BUJUMBUTA-RURAL"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=BURURI">BURURI</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=BURURI"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=CIBITOKE">CIBITOKE</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=CIBITOKE"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=CANKUZO">CANKUZO</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=CANKUZO"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=GITEGA">GITEGA</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=GITEGA"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=KARUSI">KARUSI</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=KARUSI"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=KAYANZA">KAYANZA</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=KAYANZA"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
            <li><a href="selectProv.php?prov=KIRUNDO">KIRUNDO</a><img id="drop" src="icon/arrow-down.svg" alt="">
            <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="KIRUNDO"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=MAKAMBA">MAKAMBA</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=MAKAMBA"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=MWARO">MWARO</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="MWARO"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=MURAMVYA">MURAMVYA</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="MURAMVYA"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=MUYINGA">MUYINGA</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="MUYINGA"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=NGOZI">NGOZI</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=NGOZI"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=RUYIGI">RUYIGI</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=RUYIGI"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             <li><a href="selectProv.php?prov=RUMONGE">RUMONGE</a><img id="drop" src="icon/arrow-down.svg" alt="">
             <?php
             if(mysqli_num_rows($res)>0){
                ?>
                <div class="cul">
                <ul>
                    <?php
                foreach($res as $row){
                    ?>
                    <li>
                        <a href="selectCul.php?cul=<?=$row['nom']?>&prov=RUMONGE"><?=$row['nom']?></a>
                    </li>
                    <?php
                }
            ?>
                </ul>
            </div>
           <?php
             }
            ?></li>
             </ul>
      
        
     </div>
           <h1>HISTORY</h1>
           <form class="fory">
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
                <div class="nom">
                    <h1>NOM</h1>
                </div>
                <div class="prov">
                   <h1>UMWIMBU</h1>
                </div>
                <div class="com">
                   <h1>UMWIMBU WEMEJWE NA ONCSS</h1>
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

    $yearSanitised = mysqli_real_escape_string($conn,$year);

$search = mysqli_query($conn,"select * from rapport where year(date)='".$yearSanitised."'");
if(mysqli_num_rows($search)>0){
    foreach($search as $now){

    $id_code = $now['id_code'];
    $find = mysqli_query($conn,"select * from personal where id_code = '$id_code'");


?>
        <div class="contents">
        <div class="id">
                <p><?=$count?></p>
            </div>
            <div class="nom name">
                <?php
         if(mysqli_num_rows($find)>0){
            foreach($find as $found){

        ?>
                <a href="CV.php?id_per=<?=$found['id']?>"><p><?=$found['pname']?> <?=$found['psurname']?></p></a>
                <?php
            }
        }
        ?>
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
                <div class="CertKg">
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
    }elseif(isset($_REQUEST['searchP'])){
    $count1 = 1;
    $prov = $_REQUEST['provnc'];
    $provSanitised = mysqli_real_escape_string($conn,$prov);
$search1 = mysqli_query($conn,"select * from rapport where province='".$provSanitised."'");
if(mysqli_num_rows($search1)>0){
    foreach($search1 as $now1){

    $id_code1 = $now1['id_code'];
    $find1 = mysqli_query($conn,"select * from personal where id_code = '$id_code1'");

?>
 <div class="contents">
        <div class="id">
                <p><?=$count1?></p>
            </div>
            <div class="nom name">
                <?php
      if(mysqli_num_rows($find1)>0){
        foreach($find1 as $found1){

    ?>
            <a href="CV.php?id_per=<?=$found1['id']?>"><p><?=$found1['pname']?> <?=$found1['psurname']?></p></a>
            <?php
        }
    }
?>
            </div>
    <div class="prov">
                <p><?=$now1['province']?></p>
            </div>
            <div class="com">
                   <p><?=$now1['commune']?></p>
                </div>
                <div class="colin">
                   <p><?=$now1['colline']?></p>
                </div>
                <div class="typeCul">
                   <p><?=$now1['type_culture']?></p>
                </div>
           <div class="sper">
            <p><?=$now1['sperficie']?> <?=$now1['mesure']?></p>
           </div>
           <div class="Categ">
                   <p><?=$now1['categorie']?></p>
                </div>
                <div class="CertKg">
                   <p><?=$now1['imbuto']?></p>
                </div>
                <div class="saison">
                   <p><?=$now1['saison']?></p>
                </div>
            <div class="dat">
                <p>le <?=$now1['date']?></p>
            </div>
           </div>
<?php
$count1++;
    }
}else{
        
            echo '<h1 style="
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%);
            color: #00000094;
        ">Aucune donnée de cet province</h1>';
        
    }
}else if(mysqli_num_rows($sql1)>0){
    $count = 1;
foreach($sql1 as $rows){
$id_code = $rows['id_code'];
$find = mysqli_query($conn,"select * from personal where id_code = '$id_code'");
?>



<div class="contents">
        <div class="id">
                <p><?=$count?></p>
            </div>
            <div class="nom name">
                <?php
         if(mysqli_num_rows($find)>0){
            foreach($find as $found){

        ?>
                <a href="CV.php?id_per=<?=$found['id']?>&bool=no"><p><?=$found['pname']?> <?=$found['psurname']?></p></a>
                <?php
            }
        }
        ?>
            </div>
           
            <div class="prov">
                <p><?=$rows['semance']?></p>
            </div>
            <div class="com">
                   <p><?=$rows['semanceCert']?></p>
                </div>
                <div class="colin">
                   <p><?=$rows['date']?></p>
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