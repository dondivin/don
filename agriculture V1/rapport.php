<?php
session_start();
include 'conn.php';
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
            font-family: 'Segoe UI', historic;
            color: rgb(57, 111, 228);
        }
        body{
            background-color: aliceblue;
            width: 100vw;
            height: 100vh;
        }
        openMenu1{
            display: none;
        }
    </style>
    <link rel="stylesheet" href="css/rapport.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rapport</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
<div class="bigSite">
    <div class="menu1">
    
        <a href="profil.php?"><img src="icon/profile.svg" alt=""><p id="smartMenu">Profil</p></a>
            <a  href="map.php?"><img src="icon/address.svg" alt=""><p id="smartMenu">Map</p></a>
            <a href="employee.php?"><img src="icon/employee.svg" alt=""><p id="smartMenu">Compte</p></a>
            <a id="phoneBg"  href="rapport.php?"><img src="icon/rapport.svg" alt=""><p id="smartMenu">Rapport</p></a>
            <a href="formulaire.php?"><img src="icon/onenote.svg" alt=""><p id="smartMenu">Identification</p></a>
             <a href="recolte.php"><img src="icon/farm.svg" alt=""><p id="smartMenu">Recolte</p></a>
    
</div>



    <div class="big"></div>
    <div class="both">
<div class="openMenu" id="">
    <img src="icon/menu.svg" alt="">
</div>
    <div class="admin">
        <div class="close">
            <img src="icon/close.png" alt="">
        </div>
        <div class="logo">
            <img src="icon/agrilogo.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <li ><a  href="profil.php?"><div><img id="imgP" src="icon/profile.svg" alt=""></div><div class="h1">Profile</div></a></li>
                <li><a href="map.php?"><div><img src="icon/address.svg" alt=""></div><div class="h1">Map</div></a></li>
                <li><a  href="employee.php?"><div><img src="icon/employee.svg" alt=""></div><div class="h1">Compte</div></a></li>
                <li><a id="bg" href="rapport.php?"><div><img src="icon/rapport.svg" alt=""></div><div class="h1">Rapport</div></a></li>
                <li><a href="formulaire.php?"><div><img src="icon/onenote.svg" alt=""></div><div class="h1">Identification</div></a></li>
                <li><a href="recolte.php"><div><img src="icon/farm.svg" alt=""></div><div class="h1">Recolte</div></a></li>
            </ul>
        </div>
    
                </div>
            </div>
           
    <form id="forme" action="sendRapport.php" method="post">
        <div class="title">
            <h1>Rapport</h1>
        </div>

        <div class="province">
            <label for="">Intara</label>
            <select name="province" id="sel" required>
                <option value="">Choisissez votre Province</option>
                <option value="BUJUMBURA-MARIE">BUJUMBURA MAIRIE</option>
                <option value="BUJUMBURA-RURAL">BUJUMBURA RURAL</option>
                <option value="BURURI">BURURI</option>
                <option value="CIBITOKE">CIBITOKE</option>
                <option value="CANKUZO">CANKUZO</option>
                <option value="GITEGA">GITEGA</option>
                <option value="KARUSI">KARUSI</option>
                <option value="KAYANZA">KAYANZA</option>
                <option value="KIRUNDO">KIRUNDO</option>
                <option value="MAKAMBA">MAKAMBA</option>
                <option value="MWARO">MWARO</option>
                <option value="MURAMVYA">MURAMVYA</option>
                <option value="MUYINGA">MUYINGA</option>
                <option value="NGOZI">NGOZI</option>
                <option value="RUYIGI">RUYIGI</option>
                <option value="RUMONGE">RUMONGE</option>
            </select>
            <div class="noProv" id="no">
                <p>*Must Enter Province</p>
            </div>
        </div>
        <div class="com">
        <label for="">Komine</label>
               <div>
                   <input type="text" placeholder="Entrer la commune" name="commune" id="commune" required>
                   </div>
          </div>
         <div class="colin">
         <label for="">UMUTUMBA</label>
                   <div>
                   <input type="text" placeholder="Entrer la colline" name="colline" id="colline" required>
                   </div>
         </div>
          <div class="typeCul">
          <label for="">Ibitegwa</label>
          <select name="type_cul" id="sel_cul" required>
                <option value="">Choisissez type de culture</option>
                <?php
$sql =mysqli_query($conn,'select * from type_culture') ;
if(mysqli_num_rows($sql)>0){
    foreach($sql as $row){
?>
                <option value="<?=$row['nom']?>"><?=$row['nom']?></option>
                <?php
    }
}
?>
            </select>
            <div class="add">
                <a href="addCul.php?"><h1>+</h1></a>
            </div>
             </div>
        <div class="mesure">
        <label for="">Uko Hangana</label>
            <div id="num">
                <input type="number" placeholder="Entrer la Sperficie" name="number" id="number" required>
                <div class="noNum" id="no">
                    <p>*Must Enter Mesure</p>
                </div>
            </div>
           <div id="sele">
           <label for="">Hitamwo ingero</label>
            <select name="meter" id="selMeter" required>
                    <option value="">Choisir le Mesure</option>
                
                <option value="Hectare">Hectare</option>
                <option value="Are">Are</option>
                <option value="Mètre">Mètre</option>
            </select>
            <div class="notypeMesure" id="no">
                <p>*Shiramwo Ingero</p>
            </div>
           </div>
        </div>
        <div class="Categ">
        <label for="">Kategori</label>
        <select name="type_cat" id="sel_cat" required>
                <option value="">Choisissez categorie</option>
                <option value="PREBASE">PREBASE</option>
                <option value="BASE">BASE</option>
                <option value="CERTIFIER">CERTIFIER</option>
            </select>
            <div class="certDiv">
                <label for="">IGITIGIRI/Kg</label>
                <input type="number" name="certifie" placeholder="Kg"  id="cert">
            </div>
                </div>
                <div class="saison">
                <label for="">Igice c'irima</label>
                <select name="saison" id="sel_saison" required>
                <option value="">Choisissez la saison</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              
            </select>
         
                </div>
        <div class="date">
        <label for="">Itariki</label>
            <div>
                <input type="date" placeholder="Type Date" name="date" id="date" required>
            </div>
            <div class="noDate" id="no">
                <p>*Shiramwo itariki</p>
            </div>
           </div>
        <div class="btn">
            <div>
                <input id="btn" type="submit" value="Kurungika">
            </div> 
           </div>
    </form>
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
<script src="js/form.j"></script>
<script src="js/certdiv.js"></script>
<script src="js/load.js"></script>
<script src="js/translateMenu.js"></script>
<script src="js/menuRapport.js"></script>
</html>

<?php
}else{
    echo "Loging first";

   // echo '<a href="index.php">Login</a>';
   header('location:noAccount.html');

}
?>