<?php
session_start();
$id_user = $_SESSION['user'];
include 'conn.php';
if(isset($_SESSION['user'])){

    $type_agr = $_SESSION['type'];

    $sql = mysqli_query($conn,"select * from personal where id_code = '$id_user'");
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/loading.css">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            width: 100vw;
            height: 100vh;
            background-color: rgb(7, 2, 80);
        }
   
    </style>
    <title>Identification</title>
    <link rel="website icon" href="don/agriDigital.png">
</head>
<body>
    <div class="bigSite">
    <form class="forms" action="regForm.php" enctype="multipart/form-data" method="post">
        <?php
    if(mysqli_num_rows($sql)>0){

foreach($sql as $row){
    ?>
        <div class="h1">
            <div>
                <h1>Identite Complete</h1>
            </div>
        </div>
       <div class="Fname">
        <div>
            <label for="">Izina</label>
            <input type="text"  name="Fname" value="<?=$row['pname']?>" id="nom" required>
        </div>
       <p id="nomErr">Shiramwo Indome gusa</p>
    </div>
    <div class="Fsurname">
        <div>
            <label for="">Itazirano</label>
            <input type="text"  name="Fprenom" value="<?=$row['psurname']?>" id="prenom" required>
        </div>
       <p id="prenomErr">Shiramwo Indome gusa</p>
    </div>
       <div class="Fphone">
      <div> 
        <label for="">Nomero za Telephone</label>
         <input type="text" name="Fphone" value="<?=$row['phone']?>" id="phone" required>

    </div>
    <p id="phoneErr">Shiramwo ibiharuro gusa</p>
    </div>
       <div class="Femail">
       <div>
        <label for="">Email</label>
        <input type="email"  value="<?=$row['email']?>" name="Femail" id="email">
       </div>
    </div>
       <div class="Faddress">
       <div>
        <label for="">Aho Uba</label>
        <input type="text"  value="<?=$row['address']?>" name="Faddress" id="" required>
       </div>
    </div>
       <div class="Fid">
       <div>
        <label for="">Nomero ya karangamuntu</label>
        <input type="text"  name="Fnum_id" value="<?=$row['Num_id']?>" id="id" required>
       </div>
       <p id="idErr">Shiramwo inomero yanyu ya karangamuntu</p>
    </div>
       <div class="Fgender">
       <div>
        <select name="selectGenre" value="" id="">
        <?php
            $req = mysqli_query($conn,"select * from setlang where id_code = '$id_user'");
            if(mysqli_num_rows($req)>0){
                foreach($req as $res){
                    if($res['mode']==='off'){
                        if($row['genre']!=''){
                        ?>
               <option value="<?=$row['genre']?>"><?=$row['genre']?></option>         
            <option value="Umugabo">Umugabo</option>
            <option value="Umugore">Umugore</option>

                  <?php
                        }else{
?>
            <option value="Umugabo">Umugabo</option>
            <option value="Umugore">Umugore</option>

             <?php
                        }
                    }else{
                        if($row['genre']!=''){
                        ?>

                        <!----FRENCH-->
           <option value="<?=$row['genre']?>"><?=$row['genre']?></option>  
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
                   <?php
                        }else{
                            ?>
 <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <?php

                        }
                    }
                }
            }
            ?>
        </select>
       </div>
    </div>
    <div class="Ftyp_agr">
       <div>
        <select name="typ_agr" value="<?=$row['typ_agriculteur']?>" id="">
            <?php
            $req = mysqli_query($conn,"select * from setlang where id_code = '$id_user'");
            if(mysqli_num_rows($req)>0){
                foreach($req as $res){
                    if($res['mode']==='off'){
                       if( $row['typ_agriculteur']!=''){
                        ?>
                      
            <option value="<?=$row['typ_agriculteur']?>"><?=$type_agr?></option>
           <!-- <option value="Umugwizambuto">UMUGWIZAMBUTO</option>
            <option value="Umurimyi">UMURIMYI</option>----------------------- ----->

                  <?php
                       }else{
                        ?>
                       <!--      <option value="Umugwizambuto">UMUGWIZAMBUTO</option>
            <option value="Umurimyi">UMURIMYI</option>-->
            <?php
                       }
                    }else{
                        if( $row['typ_agriculteur']!=''){
                        ?>

                        <!----FRENCH-->
            <option value="<?=$row['typ_agriculteur']?>"><?=$type_agr?></option>
           <!-- <option value="Multiplicateur">MULTIPLICATEUR</option>
            <option value="Producteur">PRODUCTEUR</option>-->
                   <?php
                        }else{
                           ?>
                     <!--      <option value="Multiplicateur">MULTIPLICATEUR</option>
            <option value="Producteur">PRODUCTEUR</option>-->
                           <?php
                        }
                    }
                }
            }
            ?>
     
           
        </select>
       </div>
    </div>
       <div class="Fcountry">
      <div>
        <label for="">Igihugu</label>
        <input type="text"  value="<?=$row['country']?>" name="Fcountry" id="" required>
      </div>
    </div>
       <div class="Fprofil">
        <label id="label" for="">Photo</label>
       <div>
        <div id="profil">
           <div>
            <img id="img" src="profil/<?=$row['profil']?>" alt="">
           </div>

        </div>
        <input type="file" name="file"  accept="image/png,image/jpeg,image/jpg" id="file" hidden>
       </div>
    </div>
    <div class="send">
<div>
<button type="submit" id="send" name="send">Kurungika</button>
</div>
    </div>
    <?php
         }
        }
        ?>
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
<script src="js/formulair.js"></script>
   <script src="js/translateMenu.j"></script>
   <script src="js/label.js"></script>
<script src="js/load.js"></script>
<script>
    
file = document.querySelector('#file');

//submit button
   let send = document.querySelector('#send');
   btn = document.querySelector('#profil');  
   let nom = document.querySelector('#nom'),
    phone = document.querySelector('#phone'),
    num_id = document.querySelector('#id'),
    imgName = document.querySelector('#img'),
    form = document.querySelector('.forms'),
    prenom =document.querySelector('#prenom'),


    
    nomErr = document.querySelector('#nomErr'),
    prenomErr =document.querySelector('#prenomErr'),
    phoneErr = document.querySelector('#phoneErr'),
    idErr = document.querySelector('#idErr');

btn.addEventListener("click",()=>{
    file.click();
});

file.addEventListener("change", ()=>{
    fileName = file.files;
    let imgSrc = URL.createObjectURL(fileName[0]);
    console.log(fileName[0].name);
    name = fileName[0].name;
    imgName.src = imgSrc;
     console.log(file);
});


setInterval(()=>{


    let a = nom.value,
        b = prenom.value;
          
   // let b = new Array(a);

//checking name contain only alphabet
if(a != ''){
if(onlyLetters(a)){
      //  console.log('true');
        nomErr.style.display = 'none';
    }else{
        nomErr.style.display = 'block';
    };
};

if(b != ''){
    if(onlyLetters(b)){
        prenomErr.style.display = 'none';
       
    }else{
        prenomErr.style.display = 'block';
    }
};
   
//console.log(onlyLetters(a));
//checking if phone numbers are numbers

let phoneNum = phone.value;
if(phoneNum != ''){
if(onlyNumbers(phoneNum)){
//console.log(true);
phoneErr.style.display = 'none';
}else{
phoneErr.style.display = 'block';

};
};
//checking if id is numbers only

let id = num_id.value;
if(id != ''){
if(onlyNumbers(id)){
//console.log(true);
idErr.style.display = 'none';
}else{
idErr.style.display = 'block';

}
};
},500);

//prevent on submit

send.addEventListener("click",()=>{


    let a = nom.value,
         b = prenom.value;

    // let b = new Array(a);
 
 //checking name contain only alphabet
 if(a != ''){
 if(onlyLetters(a)){
         console.log('true');
         nomErr.style.display = 'none';
     }else{
         nomErr.style.display = 'block';
         event.preventDefault();
     };
 };
 if(b != ''){
    if(onlyLetters(b)){
        prenomErr.style.display = 'none';
       
    }else{
        prenomErr.style.display = 'block';
        event.preventDefault();
    }
};
 //console.log(onlyLetters(a));
 //checking if phone numbers are numbers
 
 let phoneNum = phone.value;
 if(phoneNum != ''){
 if(onlyNumbers(phoneNum)){
 console.log(true);
 phoneErr.style.display = 'none';
 }else{
 phoneErr.style.display = 'block';
 
 event.preventDefault();
 };
 };
 //checking if id is numbers only
 
 let id = num_id.value;
 if(id != ''){
 if(onlyNumbers(id)){
 console.log(true);
 idErr.style.display = 'none';
 }else{
 idErr.style.display = 'block';
 event.preventDefault();
 }
 };
 });
 


//chech if input contain only letters

function onlyLetters(str){
return /^[a-z ]+$/i.test(str);
};


 //CHECK NUMBERS
 function onlyNumbers(num){
return /^[0-9 / . +]+$/i.test(num);
};
</script>
</html>
    <?php
}else{
    echo "Loging first";

   // echo '<a href="index.php">Login</a>';
   header('location:noAccount.html');

}
?>