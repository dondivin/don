
<?php
session_start();
$id_user = $_SESSION['user'];
include 'conn.php';

$sql = "select * from personal";
$res = mysqli_query($conn,$sql);

if(isset($_SESSION['user'])){

    $check = false;
    $sqlc=mysqli_query($conn,"select * from personal where id_code = '$id_user'");
    if(mysqli_num_rows($sqlc)>0){
        foreach($sqlc as $found){
            if($found['status']==='AdminGrantor' || $found['status']==='Administrateur'){
                $check = true;
            }
        }
    };

    if($check === true){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loading.css">
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
    .site .main{
        width: 100vw;
        height: 100vh;
        display: flex;
        background-color: white;
        justify-content: center;
        align-items: center;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <title>Empoyee</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
<div class="bigSite">

    <div class="menu1">

        <a href="profil.php?"><img src="icon/profile.svg" alt=""><p id="smartMenu">Profil</p></a>
            <a  href="map.php?"><img src="icon/address.svg" alt=""><p id="smartMenu">Map</p></a>
            <a id="phoneBg" href="employee.php?"><img src="icon/employee.svg" alt=""><p id="smartMenu">Compte</p></a>
            <a href="rapport.php?"><img src="icon/rapport.svg" alt=""><p id="smartMenu">Rapport</p></a>
            <a href="formulaire.php?"><img src="icon/onenote.svg" alt=""><p id="smartMenu">Identification</p></a>
             <a href="recolte.php"><img src="icon/farm.svg" alt=""><p id="smartMenu">Recolte</p></a>
    
</div>

<div class="site1">
    <div class="head">
       <div class="logo"><img src="icon/agrilogo.png" alt=""></div>
    </div>
    <div class="main">
        <div class="content">
            <div class="header">
        <h1>Compte</h1>
            </div>
            <div class="title">
                <div class="int">
                    <h1>#</h1>
                </div>
            <div class="nom">
                <h1>NOM</h1>
            </div>
            <div class="more">
                <h1>AUTRE</h1>
            </div>
        </div>
        <div class="data">
            <?php
            if(mysqli_num_rows($res)> 0){
               foreach($res as $row){

               ?>
            <div class="list">
                <div class="id">
                    <p><?=$row['id']?></p>
                </div>
                <div class="nom">
            <p><?=$row['pname']?> <?=$row['psurname']?></p>
                </div>
                <div class="more">
                    <?php
        $req=mysqli_query($conn,"select * from personal where id_code = '$id_user'");
        
        if(mysqli_num_rows($req)>0){
            foreach($req as $requ){
                if($requ['status']=='AdminGrantor'){

          if($row['status']!='AdminGrantor'){

        ?>
        <?php
if($row['status']=='Administrateur'){

        ?>

<a href="ungrant.php?id_per=<?=$row['id']?>">No Admin</a>
    <a href="CV.php?id_per=<?=$row['id']?>&bool=no">Detail</a>
<?php
}else{
?>
    <a href="grant.php?id_per=<?=$row['id']?>">Admin</a>
    <a href="CV.php?id_per=<?=$row['id']?>&bool=no">Detail</a>
    <?php
          
        }
    }
}elseif ($requ['status']=='Administrateur') {
    # code...
    ?>
   
    <a href="CV.php?id_per=<?=$row['id']?>&bool=no">Detail</a>
    <?php
}
          ?>
                </div>
            </div>
            <?php
               }
            }
        }
               ?>
               <?php
               }
               ?>
        </div>
    </div>
</div>
</div>


    <div class="site">

    <div class="mini">
        <div ><img src="icon/profile.svg" alt=""></div>
        <div ><img src="icon/address.svg" alt=""></div>
        <div id="bg1"><img src="icon/employee.svg" alt=""></div>
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
        <li ><a  href="profil.php?"><div><img id="imgP" src="icon/profile.svg" alt=""></div><div class="h1">Profile</div></a></li>
        <li><a href="map.php?"><div><img src="icon/address.svg" alt=""></div><div class="h1">Map</div></a></li>
        <li><a id="bg" href="employee.php?"><div><img src="icon/employee.svg" alt=""></div><div class="h1">Compte</div></a></li>
        <li><a href="rapport.php?"><div><img src="icon/rapport.svg" alt=""></div><div class="h1">Rapport</div></a></li>
        <li><a href="formulaire.php?"><div><img src="icon/onenote.svg" alt=""></div><div class="h1">Identification</div></a></li>
        <li><a href="recolte.php"><div><img src="icon/farm.svg" alt=""></div><div class="h1">Recolte</div></a></li>
    </ul>
</div>
        </div>
        <div class="main">
<div class="head">
    <div class="header">
<h1>Compte</h1>
    </div>
    <div class="title">
        <div class="int">
            <h1>#</h1>
        </div>
    <div class="nom">
        <h1>NOM</h1>
    </div>
    <div class="Email">
        <h1>Email</h1>
    </div>
    <div class="typ_agri">
          <h1>Categorie</h1>
    </div>
    <div class="prov">
        <h1>Province</h1>
    </div>
    <div class="more">
        <h1>AUTRE</h1>
    </div>
</div>
<div class="content">
<?php
$sql1 = "select * from personal";
$res1 = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($res1)> 0){
               foreach($res1 as $rows){
               ?>
<div class="list">
    <div class="id">
        <p><?=$rows['id']?></p>
    </div>
    <div class="nom1">
<p><?=$rows['pname']?> <?=$rows['psurname']?></p>
    </div>
    <div class="Email">
        <p><?=$rows['email']?></p>
    </div>
    <div class="typ_agri">
        <p><?=$rows['typ_agriculteur']?></p>
    </div>
    <div class="address">
        <p><?=$rows['address']?></p>
    </div>
    <div class="more">
        <?php
        $req=mysqli_query($conn,"select * from personal where id_code = '$id_user'");
        
        if(mysqli_num_rows($req)>0){
            foreach($req as $requ){
                if($requ['status']=='AdminGrantor'){

          if($rows['status']!='AdminGrantor'){
          if($rows['status']=='Administrateur'){
            ?>
             <a href="ungrant.php?id_per=<?=$rows['id']?>&">No Admin</a>
             <a href="CV.php?id_per=<?=$rows['id']?>&bool=no">Detail</a>
            <?php
 }else{

            ?>
         

    <a href="grant.php?id_per=<?=$rows['id']?>&">Admin</a>
    <a href="CV.php?id_per=<?=$rows['id']?>&bool=no">Detail</a>
    <?php
 }
          };
          
        }elseif ($requ['status']=='Administrateur') {
            # code...
            ?>
           
            <a href="CV.php?id_per=<?=$rows['id']?>&bool=no">Detail</a>
            <?php
        }
    }
}
          ?>
        
    </div>
</div>
<?php
               }
               ?>
               <?php
               }
               ?>
</div>
</div>

        </div>
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
<script src="js/mini.js"></script>
<script src="js/load.js"></script>
<script src="js/translateMenu.js"></script>
</html>

<?php


    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: aliceblue;
        }
        @media only screen and (max-width:400px) {
            
       
        .err{
            width: 80%;
            height: 200px;
          display: grid;
          grid-template-columns: 100%;
           grid-template-rows: 60% 40%;
            
        }
        .err .img{
           display: flex;
           justify-content: center;
           align-items: center;
        }
        .err .img img{
            width: 170px;
            height: 170px;
        }
        .err .h1{
            display: flex;
           justify-content: center;
           align-items: center;
        }
        .err .h1 h1{
            font-size: 180%;
            font-weight: 800;
            text-align: center;
            color: dodgerblue;
            font-family: 'Courier New', Courier, monospace;
        }

    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <div class="err">
        <div class="img">
            <img src="gif/ordi map.gif" alt="">
        </div>
        <div class="h1">
            <h1>Undergoing...</h1>
        </div>
    </div>
</body>
</html>
<?php

    }


}else{
    echo "Loging first";

   // echo '<a href="index.php">Login</a>';
   header('location:noAccount.html');

}
?>