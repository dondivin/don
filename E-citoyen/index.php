<?php

include 'conn.php';
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" href="css/toast.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .bigSite .logo h1{
  
    background-image: url('icon/uburundi.png');
    font-weight: 900;
 
}
    </style>
    <title>Se connecter</title>
  
</head>

<body>
    <img id="imgPage" src="photo/bg.png" alt="">
    <div class="bigSite">
        <div class="logo">
            <h1>E-Citoyen</h1><img src="icon/mapBDI.png" alt="">
        </div>
       <div class="bg"></div>
        <div class="logbtn">
            <button id="log">Login</button>
            <button  id="reg">Register</button>
            <div class="bar">
                <span id="bar"></span>
            </div>
        </div>
        <div class="log">

       
        <div class="forms" id="login">

        
            <div class="Fname">
                <div class="icon">
                    <img src="icon/user.svg" alt="">
                </div>
                <div>
                    <label for="">UserID</label>
                    <input id="id" type="text"  value="" required>
                </div>
                
                <p id="nomErr">*UserID incorrect</p>
            </div>
            <div class="Fsurname">
                <div class="icon">
                    <img src="icon/password-svgrepo-com.svg" alt="">
                </div>
                <div>
                    <label for="">Password</label>
                    <input id="passV" type="password" class="passLog" value=""  required>
                </div>
                <div class="view">
                    <img id="passVue" src="icon/unhidepss.svg" alt="">
                </div>
                <p id="prenomErr">*Password is weak</p>
            </div>
            <div class="send">
                <div>
                    <button class="btn1" id="send">Connexion<img id="btnload" src="icon/loading.svg" alt=""></button>
                </div>
            </div>
        </div>


        <div class="forms" id="register">
        
            <div class="Fphone">
                <div class="icon">
                    <img src="icon/user.svg" alt="">
                </div>
                <div>
                    <label for="">Nom</label>
                    <input type="text" name="" value="" id="nom"  required>

                </div>
                <p id="phoneErr">*Nom is incorrect</p>
            </div>
            <div class="Fphone">
                <div class="icon">
                    <img src="icon/user.svg" alt="">
                </div>
                <div>
                    <label for="">Prenom</label>
                    <input type="text" name="" value="" id="prenom"  required>

                </div>
                <p id="phoneErr">*Prenom is incorrect</p>
            </div>
            
    <div class="Fid">
        <div>
        <h1 id="prov">Province(où vous êtes né)</h1>
        <select id="province" class="inputMe1">
            <option value="">Province</option>
            <?php
            $reqProv = "SELECT * FROM syst_provinces";
         $resProv = mysqli_query($conn,$reqProv);
         if(mysqli_num_rows($resProv)>0){
            foreach($resProv as $row1){

         
            ?>
            <option value="<?=$row1['PROVINCE_NAME']?>"><?=$row1['PROVINCE_NAME']?></option>
            <?php
               }
            }
            ?>
        </select>
        </div>
    
        </div>
            <div class="Fphone">
                <div class="icon">
                    <img src="icon/user.svg" alt="">
                </div>
                <div>
                    <label for="">UserID</label>
                    <input type="text" name="" value="120255" id="userId"  readonly>

                </div>
                <p id="phoneErr">*UserID is incorrect</p>
            </div>
          
            <div class="Femail">
                <div class="icon">
                    <img src="icon/password-svgrepo-com.svg" alt="">
                </div>
                <div>
                    <label for="">New Password</label>
                    <input id="passV" type="password" value="" name="" class="pass">
                </div>
                <div class="view">
                    <img id="passVue" src="icon/unhidepss.svg" alt="">
                </div>
            </div>
            <div class="Faddress">
                <div class="icon">
                    <img src="icon/password-svgrepo-com.svg" alt="">
                </div>
                <div>
                    <label for="">Confirm Password</label>
                    <input id="passV" type="password" value="" name="" class="confPass" required>
                </div>
                <div class="view">
                    <img id="passVue" src="icon/unhidepss.svg" alt="">
                </div>
            </div>

            <div class="send">
                <div>
                    <button class="btn2" id="regist1">Register <img id="btnload1" src="icon/loading.svg" alt=""></button>
                </div>
            </div>
        </div>  
    </div>

    </div>


    <!--  **************** toast**************-->

    <div class="toastReg">
        <h1 id="continue">
           Votre userID est <b id="userShow">0000</b>
           et le mot de pass que vous avez inserer pour se connecter.
        </h1>
        <div class="confBtn">
            <button id="confreg">Ok</button>
            
        </div>
    </div>

</body>
<script src="js/label1.js"></script>
<script src="js/script.js"></script>
</html>