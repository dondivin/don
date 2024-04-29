<?php
include "conn.php";
session_start();
$id_user = $_SESSION['user'];

if(isset($_SESSION['user'])){

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
  
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <title>MAP</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
    <div class="bigSite">

    <div class="menu1">

        <a href="profil.php?"><img src="icon/profile.svg" alt=""><p id="smartMenu">Profil</p></a>
            <a id="phoneBg" href="map.php?"><img src="icon/address.svg" alt=""><p id="smartMenu">Map</p></a>
            <a href="employee.php?"><img src="icon/employee.svg" alt=""><p id="smartMenu">Compte</p></a>
            <a href="rapport.php?"><img src="icon/rapport.svg" alt=""><p id="smartMenu">Rapport</p></a>
            <a href="formulaire.php?"><img src="icon/onenote.svg" alt=""><p id="smartMenu">Identification</p></a>
             <a href="recolte.php"><img src="icon/farm.svg" alt=""><p id="smartMenu">Recolte</p></a>
    
</div>

<div class="site1">
    <div class="head">
       <div class="logo"><img src="icon/agrilogo.png" alt=""></div>
    </div>
    <div class="main">
        <div class="div">
        <div class="heading">
            <h1>La Carte</h1>
        </div>
        <div class="map1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019608.3955622942!2d29.265836118648057!3d-3.387934135385136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c144d33654f15b%3A0xb1234d0e5631ec8d!2sBurundi!5e0!3m2!1sfr!2sbi!4v1693949207917!5m2!1sfr!2sbi" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
</div>



    <div class="site">

    <div class="mini">
        <div ><img src="icon/profile.svg" alt=""></div>
        <div id="bg1"><img src="icon/address.svg" alt=""></div>
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
        <li ><a  href="profil.php?"><div><img id="imgP" src="icon/profile.svg" alt=""></div><div class="h1">Profile</div></a></li>
        <li><a id="bg" href="map.php?"><div><img src="icon/address.svg" alt=""></div><div class="h1">Map</div></a></li>
        <li><a  href="employee.php?"><div><img src="icon/employee.svg" alt=""></div><div class="h1">Compte</div></a></li>
        <li><a href="rapport.php?"><div><img src="icon/rapport.svg" alt=""></div><div class="h1">Rapport</div></a></li>
        <li><a href="formulaire.php?"><div><img src="icon/onenote.svg" alt=""></div><div class="h1">Identification</div></a></li>
        <li><a href="recolte.php"><div><img src="icon/farm.svg" alt=""></div><div class="h1">Recolte</div></a></li>
    </ul>
</div>
        </div>
        <div class="main">
            <div class="heading">
                <h1>La Carte</h1>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019608.3955622942!2d29.265836118648057!3d-3.387934135385136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c144d33654f15b%3A0xb1234d0e5631ec8d!2sBurundi!5e0!3m2!1sfr!2sbi!4v1693949207917!5m2!1sfr!2sbi" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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







</body>
<script src="js/mini.js"></script>
<script src="js/load.js"></script>
<script src="js/translateMenu.js"></script>
</html>
<?php
}else{
    echo "Loging first";

   // echo '<a href="index.php">Login</a>';
   header('location:noAccount.html');

}
?>