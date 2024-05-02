let passwordView = document.querySelectorAll('#passVue'),
    registerBtn = document.querySelector('#regist1'),
    passWrdInput = document.querySelectorAll('#passV');
let passInfo = false;
    passwordView.forEach((val ,i ,arr)=>{
        val.onclick = ()=>{
            if(passInfo === false){
                passwordView[i].src = 'icon/hidepass.svg';
                passwordView[i].style.transition = '0.4s';
                passWrdInput[i].type = 'text';
                passInfo = true;
            }else if(passInfo){
                passwordView[i].src = 'icon/unhidepss.svg';
                passwordView[i].style.transition = '0.4s';
                passWrdInput[i].type = 'password';
                passInfo = false;
            }
           
        }
    })
    
    //<form


//generating ID
let userId = document.querySelector('#userId');
idGen = '';
function idGenerate(){
    let num = '0123456789';
    for(let i = 0;i<6;i++){
        idGen += num.charAt(Math.floor(Math.random()*6));
        console.log(idGen);
        userId.value = idGen;
    }
   return idGen;
}

idGenerate();



let contBtn = document.querySelector('#confreg');
contBtn.onclick = () =>{
    location.href = 'index.php';
}
 
    registerBtn.onclick = () =>{
        let newPass = document.querySelector('.pass').value,
            nom = document.querySelector('#nom').value,
            prenom = document.querySelector('#prenom').value,
            provNaissance = document.querySelector('#province').value,
        confPass = document.querySelector('.confPass').value;


        let toastReg = document.querySelector('.toastReg'),
            showUserID = document.querySelector('#userShow');
      
        btnLoad1.style.display = 'block';
        if(newPass === confPass){
            if(nom === ''){
                alert('name input is empty');
            }else if(prenom === ''){
                alert('Prenom is empty');
            }else if(newPass === ''){
                alert('Password is empty');
            }else if(provNaissance === ''){
                alert('Province is empty');
            }else{
                let xhr = new XMLHttpRequest();
                xhr.open("POST","register.php?nom="+nom+"&pren="+prenom+"&id="+idGen+"&pass="+newPass+'&prov='+provNaissance,true);
                xhr.onload = function(){
                    if(xhr.status === 200){
                        //alert('registered is done');
                        toastReg.style.transform = 'scale(1)';
                        toastReg.style.transition = '0.4s';
                        showUserID.innerHTML = `${idGen}`;
                        
                    }else{
                        alert('registered failed');
                    }
                }
                xhr.send();
           
               
            }
            
        }else{
            alert('password not match');
        }
       
    }



    let btnLoad = document.querySelector('#btnload'),
    btnLoad1 = document.querySelector('#btnload1'),
    logiBtn = document.querySelector('.btn1'),
    regibtn = document.querySelector('.btn2');

    logiBtn.onclick = ()=>{

let userID = document.querySelector('#id').value,
    passLog  = document.querySelector('.passLog').value;

    if(userID === ''){
        alert('insert your ID');
    }else if(passLog === ''){
        alert('insert your Password');
    }else{
        btnLoad.style.display = 'block';
        let a =document.createElement('a');
            a.href = 'log.php?id='+userID+'&pass='+passLog;
       // location.href('log.php?id='+userID+'&pass='+passLog);
       a.click();
    }

      
       
      }
  
      //homepage 

 /*----------   ACCUIELL ******************************************+°+++++++++++++++++*/




     


     


    






        

     
     
     