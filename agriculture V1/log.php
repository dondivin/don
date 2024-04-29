<?php
session_start();

if(isset($_SESSION['user'])){
    if(isset($_SESSION['type'])){
        header("location:profil.php");
    }else{
        header('location:index.php');
    }
   
}elseif(isset($_SESSION['type'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="css/logi.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            background-color: aliceblue;
        }

    </style>
    <title>Login</title>
    <link rel="website icon" href="don/agriDigital.png">
</head> 
<body>
<div class="bigSite">
    <div class="loger">
        <div class="logo1">
            <img src="icon/agrilogo.png" alt="">
        </div>
    <div class="button">
        <div class="pos">
        <div class="bg"></div>
        <button id="btnLog">Kwinjira</button>
        <button id="btnReg" required>Kwiyandikisha</button>
    </div>
    </div>
    <div class="form">
    <form action="login.php" method="post">
        <div class="login">
        <div class="nom">
       <h1>Kwinjira</h1>
        </div>
        <div class="input">
            <div class="email">
        <h2 id="mail">Email/Inomero</h2>
        <input type="text" name="Email" id="email" class="lo">
    </div>
    <div class="pass">
        <h2 id="pswrd">Igiharuro kabanga</h2>
        <input type="text" name="password" id="pass" class="lo">
    </div>
    <div class="check">
        <div class="p">
        <a href="authNum.php"><p>Wibagiye akabanga</p></a>
    </div>
    </div>
        </div>
        <div class="btn">
        <input type="submit" name="login" value="Kwinjira">
        <div class="logo">
            <img src="don/d.svg" alt="">
            <img src="don/o.svg" alt="">
            <img src="don/n.svg" alt="">
        </div>
        </div>
    </div>
</form>
<form id="form1" action="register.php" method="post">
    <div class="sign">
        <div class="nom">
            <h1>Kwiyandikisha</h1>
        </div>
        <div class="input">
            <div class="log">
                <h3>Email/Inomero</h3>
                <input type="text" name="email" id="login" class="reg email" required> 
               </div>
            
        <div class="num">
            <h3>Igiharuro kabanga</h3>
            <input type="password" name="password" id="number" class="reg pass" required>
           </div>
        <div class="num1">
         <h3>ico giharuro nyene</h3>
         <input type="password" name="comfirmPswrd" id="number1" class="reg copass" required>
        </div>

        </div>
        <div class="btn">
<input type="submit" value="Kwiyandikisha" name="register" class="register">
<div class="logo">
    <img src="don/d.svg" alt="">
    <img src="don/o.svg" alt="">
    <img src="don/n.svg" alt="">
</div>
        </div>
    </div>
    <input type="text" name="id_code" id="id_code" hidden>
    </form>
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
<script src="js/btn.js"></script>
<script src="js/load.js"></script>
<script src="js/textAnim.js"></script>
<script src="js/log.js"></script>
<script src="js/randCode.js"></script>
</html>
<?php
}else{
    header('location:index.php');
}
?>