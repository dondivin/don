<?php
$checkEmail = true;

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
    <title>Document</title>
</head>
<body>
<?php
         echo $checkEmail;
       if($checkEmail == false){

           // header("location:profil.php");
           echo '<div class="anime">
           <div class="img">
               <img src="icon/verify.png" alt="">
           </div>
       </div>';
        } else{
          //  echo "<script>alert('no account with that data')</script>";
            //header("location:index.php"); 
        
        echo '<div class="anime1">
        <div class="img">
            <img src="icon/notVerified.svg" alt="">
        </div>
    </div>';
        }
 

?>

   
</body>
</html>
