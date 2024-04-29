<?php
include('conn.php');
//include ("index.php");
session_start();

$email = $_POST['Email'];
$pass = $_POST['password'];
$checkEmail = false;

if(isset($_POST['login'])){

$userSanitized = mysqli_real_escape_string($conn,$email);
$passSanitized = mysqli_real_escape_string($conn,$pass);



    $sql = "select * from accounts where email ='".$userSanitized."' AND password = '".$passSanitized."'";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
      //  foreach($res as $row){
          
          // if($email == $row['email'] && $pass == $row['password']){
      $checkEmail = true;
     // echo $row['email'];
     foreach($res as $row){
      $id_user = $row['id_code'];
      };
     // echo $checkEmail;
       //    }
      //  }
    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
            background-color: aliceblue;
        }
       
    </style>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
<?php
        // echo $checkEmail;
         $count = 0;
       if($checkEmail == true){
           // header("location:profil.php");
           echo '<div class="anime">
           <div class="img">
               <img src="icon/verify.png" alt="">
           </div>
       </div>';
    
       $_SESSION['user'] = $id_user;
       header("location:profil.php");
                
        } else{
          //  echo "<script>alert('no account with that data')</script>";
            //header("location:index.php"); 
        
        echo ' <div class="anime1">
        <div class="img">
            <h1>!</h1>
        </div>
        <div class="text">
          <p>Ivyo mwashizemwo ntibihura!</p>
          <p>Email/numero ou mot de passe est incorrect!</p>
        </div>
        <div class="btn">
    <a href="index.php">OK</a>
        </div>
    </div>';
        }
 
?>
<?php
}
?>

   
</body>
</html>
