let selectInfo = document.querySelector('.selectInfo'),
backBtn = document.querySelector('#back'),
backDiv = document.querySelector('.back'),
center = document.querySelector('.center'),
meBtn = document.querySelector('.me'),
partnerBtn = document.querySelector('#conjoint'),
pereBtn = document.getElementById('pere'),
mereBtn = document.getElementById('mere'),
monInfo = document.querySelector('.monInfo'),
conjointInfo = document.querySelector('.conjointInfo'),
pereInfo = document.querySelector('.pereInfo'),
mereInfo = document.querySelector('.mereInfo');


let plusInfo = document.querySelector('#plusInfo'),
    docSelect = document.querySelector('.btnInfo');



//second forms

let inputMe1 = document.querySelectorAll('.inputMe1'),
    inputPere1 = document.querySelectorAll('.inputPere1'),
    inputMere1 = document.querySelectorAll('.inputMere1'),
    modifyBtn = document.querySelectorAll('#send1');






pereBtn.onclick = () => {
    alert('perebtn');
}
window.onload = () => {
   /* setTimeout(()=>{
        docSelect.style.height = '711px';
        docSelect.style.transition = '1s';
    },1000)*/
    isVisible();
    checkingForms();
    logoComplete();
   
}




let selectDoc = document.querySelector('.span');




let checkComplete = document.querySelectorAll('.check'),
    inputMe = document.querySelectorAll('.inputMe'),
    inputPere = document.querySelectorAll('.inputPere'),
    inputMere = document.querySelectorAll('.inputMere'),
    inputPartner = document.querySelectorAll('.inputConjoint');


    let checkedMe = 0,
        checkedPere = 0,
        checkedMere = 0,
        checkedPartner = 0;


      let  loading = document.querySelectorAll('#btnload'),
      loading1 = document.querySelectorAll('#btnload1');


function Register(num){
    if(num === 0){
       // alert('my info regitered');
        let myName = inputMe[0].value,
            mySurname= inputMe[1].value,
            myPhone = inputMe[2].value,
            myEmail = inputMe[3].value,
            myDate = inputMe[4].value,
            myLieu = inputMe[5].value,
            myCommune = inputMe[6].value,
            myProvince = inputMe[7].value,
            myGender = inputMe[8].value,
            myStatus = inputMe[9].value,
            myProfession = inputMe[10].value,
            myresidZone = inputMe[11].value,
            myResidProvince = inputMe[12].value,
            myResidCommune = inputMe[13].value;

            let xhr = new XMLHttpRequest();
            xhr.open("POST","registerMyInfo.php?nom="+myName+"&pren="+mySurname+
            "&phone="+myPhone+"&email="+myEmail+"&mydate="+myDate+"&lieu="+myLieu+
             "&commune="+myCommune+"&prov="+myProvince+"&gender="+myGender+"&stat="+myStatus+"&prof="+myProfession+
             "&residZone="+myresidZone+"&residProv="+myResidProvince+"&residCom="+myResidCommune,true);
             xhr.onload = function(){
                if(xhr.status === 200){
                    alert('registered is done');
                    location.href = 'accueil.php';
                }else{
                    alert('registered failed');
                }
            }
    xhr.send();
    }else if(num === 1){
      //  alert('my pere info regitered');


        let pere_Name = inputPere[0].value,
        pere_Surname= inputPere[1].value,
        pere_date = inputPere[2].value,
        pere_prof = inputPere[3].value,
        pere_resid = inputPere[4].value,
        pere_nation = inputPere[5].value;

let xhr = new XMLHttpRequest();
    xhr.open("POST","registerPereInfo.php?nom="+pere_Name+"&pren="+pere_Surname+
    "&date="+pere_date+"&prof="+pere_prof+"&resid="+pere_resid+"&nation="+pere_nation,true);

    xhr.onload = function(){
        if(xhr.status === 200){
            alert('registered is done');
            location.href = 'accueil.php';
        }else{
            alert('registered failed');
        }
    }
    xhr.send();






    }else if(num === 2){
      //  alert('my mere info regitered');


        let mere_Name = inputMere[0].value,
        mere_Surname= inputMere[1].value,
        mere_date = inputMere[2].value,
        mere_prof = inputMere[3].value,
        mere_resid = inputMere[4].value,
        mere_nation = inputMere[5].value;
        
        let xhr = new XMLHttpRequest();
        xhr.open("POST","registermereInfo.php?nom="+mere_Name+"&pren="+mere_Surname+
        "&date="+mere_date+"&prof="+mere_prof+"&resid="+mere_resid+"&nation="+mere_nation,true);
        
        xhr.onload = function(){
        if(xhr.status === 200){
            alert('registered is done');
            location.href = 'accueil.php';
        }else{
            alert('registered failed');
        }
        }
        xhr.send();





    }
}

function Modify(num){
    if(num === 0){
       // alert('my info regitered');
        let myName = inputMe1[0].value,
            mySurname= inputMe1[1].value,
            myPhone = inputMe1[2].value,
            myEmail = inputMe1[3].value,
            myDate = inputMe1[4].value,
            myLieu = inputMe1[5].value,
            myCommune = inputMe1[6].value,
            myProvince = inputMe1[7].value,
            myGender = inputMe1[8].value,
           
            myStatus = inputMe1[9].value,
            myProfession = inputMe1[10].value,
            myresidZone = inputMe1[11].value,
            myResidQuarter = inputMe1[12].value,
            myResidAvenue = inputMe1[13].value,
            myResidProvince = inputMe1[14].value,
            myResidCommune = inputMe1[15].value;


let xhr = new XMLHttpRequest();
    xhr.open("POST","registerMyInfo.php?nom="+myName+"&pren="+mySurname+
    "&phone="+myPhone+"&email="+myEmail+"&mydate="+myDate+"&lieu="+myLieu+
     "&commune="+myCommune+"&prov="+myProvince+"&gender="+myGender+"&stat="+myStatus+"&prof="+myProfession+
     "&residZone="+myresidZone+"&residQuart="+myResidQuarter+"&residAvenue="+myResidAvenue+"&residProv="+myResidProvince+"&residCom="+myResidCommune,true);
     xhr.onload = function(){
        if(xhr.status === 200){
            //alert('registered is done');
            let response = xhr.responseText;
            alert(response);
            location.href = 'accueil.php';
        }else{
            alert('registered failed');
        }
    }
    xhr.send();
    }else if(num === 1){
      //  alert('my pere info regitered');


        let pere_Name = inputPere1[0].value,
        pere_Surname= inputPere1[1].value,
        pere_date = inputPere1[2].value,
        pere_prof = inputPere1[3].value,
        pere_resid = inputPere1[4].value,
        pere_nation = inputPere1[5].value;

let xhr = new XMLHttpRequest();
    xhr.open("POST","registerPereInfo.php?nom="+pere_Name+"&pren="+pere_Surname+
    "&date="+pere_date+"&prof="+pere_prof+"&resid="+pere_resid+"&nation="+pere_nation,true);

    xhr.onload = function(){
        if(xhr.status === 200){
           // alert('registered is done');
           let response = xhr.responseText;
           alert(response);
            location.href = 'accueil.php';
        }else{
            alert('registered failed');
        }
    }
    xhr.send();






    }else if(num === 2){
      //  alert('my mere info regitered');


        let mere_Name = inputMere1[0].value,
        mere_Surname= inputMere1[1].value,
        mere_date = inputMere1[2].value,
        mere_prof = inputMere1[3].value,
        mere_resid = inputMere1[4].value,
        mere_nation = inputMere1[5].value;
        
        let xhr = new XMLHttpRequest();
        xhr.open("POST","registermereInfo.php?nom="+mere_Name+"&pren="+mere_Surname+
        "&date="+mere_date+"&prof="+mere_prof+"&resid="+mere_resid+"&nation="+mere_nation,true);
        
        xhr.onload = function(){
        if(xhr.status === 200){
            //alert('registered is done');
            let response = xhr.responseText;
            alert('mom '+response);
            location.href = 'accueil.php';
        }else{
            alert('registered failed');
        }
        }
        xhr.send();





    }else if(num === 3){
       // alert('enregistre conjoint');

        let partner_Name = inputPartner[0].value,
        partner_Surname= inputPartner[1].value,
        partner_Name_father = inputPartner[2].value,
        partner_Name_mom = inputPartner[3].value,
        partner_date = inputPartner[4].value,
        partner_prof = inputPartner[5].value,
        partner_resid = inputPartner[6].value,
        partner_nation = inputPartner[7].value,
        date_de_marriaage = inputPartner[8].value;
        
        let xhr = new XMLHttpRequest();
        xhr.open("POST","registerPartnerInfo.php?nom="+partner_Name+"&pren="+partner_Surname+"&nomPere="+partner_Name_father+"&nomMere="+partner_Name_mom+
        "&date="+ partner_date+"&prof="+partner_prof+"&resid="+partner_resid+"&nation="+partner_nation+"&date_marriage="+date_de_marriaage,true);
        
        xhr.onload = function(){
        if(xhr.status === 200){
            let response = xhr.responseText;
            alert(response);
            //alert('registered is done');
            location.href = 'accueil.php';
        }else{
            alert('registered failed');
        }
        }
        xhr.send();






    }
}


function logoComplete(){
    if(inputMe1[0].value ==='' || inputMe1[1].value === '' || 
    inputMe1[2].value === '' || inputMe1[3].value === '' || 
    inputMe1[4].value === '' || inputMe1[5].value === '' || 
    inputMe1[6].value === '' || inputMe1[7].value === '' ||
    inputMe1[8].value === '' || inputMe1[9].value === ''){
       console.log('not all input');
    }else{
        checkedMe = true; 
    };

    if(inputPere1[0].value ==='' || inputPere1[1].value === '' || 
inputPere1[2].value === '' || inputPere1[3].value === '' || 
inputPere1[4].value === '' || inputPere1[5].value === '' ){
    console.log('Please enter pere input');
}else{
    checkedPere = true; 

}

if(inputMere1[0].value ==='' || inputMere1[1].value === '' || 
inputMere1[2].value === '' || inputMere1[3].value === '' || 
inputMere1[4].value === '' || inputMere1[5].value === '' ){
    console.log('Please enter mere inputs');
}else{
    checkedMere = true; 
  
}



BtnComplete();

};
let completeBtn = document.querySelector('#complete');
let isOk = false;


function BtnComplete(){
    
    if(checkedMe === true && checkedPere === true && checkedMere === true){ 
completeBtn.style.backgroundColor = 'dodgerblue';
console.log('completeBtn');
     isOk = true;

    }
}


/*function myInfo(num){
    if(inputMe[0].value ==='' || inputMe[1].value === '' || 
inputMe[2].value === '' || inputMe[3].value === '' || 
inputMe[4].value === '' || inputMe[5].value === '' || 
inputMe[6].value === '' || inputMe[7].value === '' ||
inputMe[8].value === '' || inputMe[9].value === ''){
    alert('Please enter');
}else{
    checkedMe = true; 
    loading[num].style.display = 'block'; 
    Register(num);
};
}*/
function myInfo(num){
    let checkMyInputIsOk = true;
  inputMe.forEach((val,i,arr)=>{
    if(inputMe[i].value === ""){
checkMyInputIsOk = false;
    }
  });
  if(checkMyInputIsOk){
    checkedMe = true; 
    loading[num].style.display = 'block'; 
    Register(num);
  }else{
    alert('Please enter your information');
  }
   
}

function myPere(num){
    if(inputPere[0].value ==='' || inputPere[1].value === '' || 
inputPere[2].value === '' || inputPere[3].value === '' || 
inputPere[4].value === '' || inputPere[5].value === '' ){
    alert('Please enter pere input');
}else{
    checkedPere = true; 
    loading[num].style.display = 'block'; 
    Register(num);
}
}

function mereInform(num){
    if(inputMere[0].value ==='' || inputMere[1].value === '' || 
inputMere[2].value === '' || inputMere[3].value === '' || 
inputMere[4].value === '' || inputMere[5].value === '' ){
    alert('Please enter mere inputs');
}else{
    checkedMere = true; 
    loading[num].style.display = 'block'; 
    Register(num);
}
}

/*- form to modify-----------------*/
/*function myInfo1(num){
    if(inputMe1[0].value ==='' || inputMe1[1].value === '' || 
inputMe1[2].value === '' || inputMe1[3].value === '' || 
inputMe1[4].value === '' || inputMe1[5].value === '' || 
inputMe1[6].value === '' || inputMe1[7].value === '' ||
inputMe1[8].value === '' || inputMe1[9].value === ''){
    alert('Please enter');
}else{
    checkedMe = true; 
    loading1[num].style.display = 'block'; 
    Modify(num);
};
}*/
function myInfo1(num){
    let checkMyInputIsOk = true;
  inputMe1.forEach((val,i,arr)=>{
    if(inputMe1[i].value === ""){
checkMyInputIsOk = false;
    }
  });
  if(checkMyInputIsOk){
    checkedMe = true; 
    loading1[num].style.display = 'block'; 
    Modify(num);
  }else{
    alert('Please enter your information');
  }
   
}

function myPere1(num){
    if(inputPere1[0].value ==='' || inputPere1[1].value === '' || 
inputPere1[2].value === '' || inputPere1[3].value === '' || 
inputPere1[4].value === '' || inputPere1[5].value === '' ){
    alert('Please enter pere input');
}else{
    checkedPere = true; 
    loading1[num].style.display = 'block'; 
    Modify(num);
}
}

function mereInform1(num){
    if(inputMere1[0].value ==='' || inputMere1[1].value === '' || 
inputMere1[2].value === '' || inputMere1[3].value === '' || 
inputMere1[4].value === '' || inputMere1[5].value === '' ){
    alert('Please enter mere inputs');
}else{
    checkedMere = true; 
    loading1[num].style.display = 'block'; 
    Modify(num);
}
}
function ConjointInfo(num){
  /*  if(inputMere1[0].value ==='' || inputMere1[1].value === '' || 
inputMere1[2].value === '' || inputMere1[3].value === '' || 
inputMere1[4].value === '' || inputMere1[5].value === '' ){
    alert('Please enter mere inputs');
}else{
    checkedMere = true; 
    loading1[num].style.display = 'block'; 
    Modify(num);
}*/
let isAllInputOk = true;
if(partnerBtn){


inputPartner.forEach(el =>{
    console.log(el);
    if(el.value === ''){
       // alert('Please enter spouse');
        isAllInputOk = false;
    }else{
       // alert('spouse is inserted');
    }

  
});
}else{
    isAllInputOk = false;
}
if(isAllInputOk){
  //  alert('spouse is inserted');
  Modify(num);
  checkedPartner = true;
}else{
    alert('Please enter spouse');
}
}

//checking all inputs

function checkingForms(){

let inputMe1 = document.querySelectorAll('.inputMe1');

    if(inputMe1[0].value ==='' || inputMe1[1].value === '' || 
    inputMe1[2].value === '' || inputMe1[3].value === '' || 
    inputMe1[4].value === '' || inputMe1[5].value === '' || 
    inputMe1[6].value === '' || inputMe1[7].value === '' ||
    inputMe1[8].value === '' || inputMe1[9].value === '' ||
     inputPere1[0].value ==='' || inputPere1[1].value === '' || 
    inputPere1[2].value === '' || inputPere1[3].value === '' || 
    inputPere1[4].value === '' || inputPere1[5].value === '' ||
    inputMere1[0].value ==='' || inputMere1[1].value === '' || 
    inputMere1[2].value === '' || inputMere1[3].value === '' || 
    inputMere1[4].value === '' || inputMere1[5].value === '') {
                console.log('Please enter all inputs');
             }else{
                console.log('filled');
             }
    
            }



function verify(){
    myInfo();
    myPere();
    mereInform();
}



    
       let checkInput = setInterval(()=>{
           
       
 


//console.log('Input '+checkedMe);
/*console.log(checkedPere);
console.log(checkedMere);*/

let registerbtn = document.querySelectorAll('#send');
  

    registerbtn.forEach((val ,i ,arr)=>{
        val.onclick = ()=>{
            if(i === 0){
                myInfo(i);
               // loading[i].style.display = 'block';
            }else if(i === 1){
                myPere(i);
               // loading[i].style.display = 'block';
            }else if(i === 2){
                mereInform(i);
               // loading[i].style.display = 'block';
            }
           
        }
    })

    let Modifybtn = document.querySelectorAll('#send1');
  

    Modifybtn.forEach((val ,i ,arr)=>{
        val.onclick = ()=>{
            if(i === 0){
                myInfo1(i);
               // loading[i].style.display = 'block';
            }else if(i === 1){
                myPere1(i);
               // loading[i].style.display = 'block';
            }else if(i === 2){
                mereInform1(i);
               // loading[i].style.display = 'block';
            }else if(i === 3){
                alert("conjoint");
                ConjointInfo(i);
            }
           
        }
    })

    let isAllInputOk = true;
    if(partnerBtn){
    inputPartner.forEach(el =>{
       // console.log(el);
        if(el.value === ''){
           // alert('Please enter spouse');
            isAllInputOk = false;
        }else{
           // alert('spouse is inserted');
        }
    
      
    });
}else{
    isAllInputOk = false;
}
    if(isAllInputOk){
      //  alert('spouse is inserted');
      checkedPartner = true;
    }else{
       // alert('Please enter spouse');
    }





if(checkedMe === true){
    checkComplete[0].style.display = 'block';
}else{
    checkComplete[0].style.display = 'none';
};

if(checkedPere === true){
    checkComplete[1].style.display = 'block';
}else{
    checkComplete[1].style.display = 'none';
};
if(checkedMere === true){
    checkComplete[2].style.display = 'block';
}else{
    checkComplete[2].style.display = 'none';
}
if(checkComplete[3]){


if(checkedPartner){
   // console.log( "me"+checkedPartner);
  
    checkComplete[3].style.display = 'block';
}else{
    checkComplete[3].style.display = 'none';
}
}else{
   // alert('no conjoint');
}
},500) ;
let number;

backDiv.onclick = () => {
   /* number = 3;
    Retour(number);*/
   // alert('Retour');
   number = 3;
   ToBack(number);
  

}
meBtn.onclick = () => {
    //alert('You clicked meInfo');
    number = 0;
    myFront(number);
 // myInfo();
 //console.log(number);
 }

pereBtn.onclick = () => {
    //alert('You clicked pereInfo');
    number = 1;
    myFront(number);
  //myPere();
  //console.log(number);
}

mereBtn.onclick = () => {
    //alert('You clicked mereInfo');
    number = 2;
    myFront(number);
 // Mymon();
 //console.log(number);
}

function myFront(num){
 
if(num === 0){
    selectInfo.style.width = '940px';
selectInfo.style.height = '750px';
selectInfo.style.overflowY = 'auto';
selectInfo.style.transition = '0.4s';
center.style.left = '-120%';
center.style.transition = '0.4s';

monInfo.style.left = '0px';
monInfo.style.transition = '0.4s';
backDiv.style.display = 'flex';
}else if(num === 1){
    selectInfo.style.width = '940px';
    selectInfo.style.height = '470px';
    selectInfo.style.transition = '0.4s';
    center.style.left = '-120%';
    center.style.transition = '0.4s';
 
    pereInfo.style.left = '0px';
    pereInfo.style.transition = '0.4s';
    backDiv.style.display = 'flex';
}else if(num === 2){
    selectInfo.style.width = '940px';
    selectInfo.style.height = '470px';
    selectInfo.style.transition = '0.4s';
    center.style.left = '-120%';
    center.style.transition = '0.4s';
   
    mereInfo.style.left = '0px';
    mereInfo.style.transition = '0.4s'; 
    backDiv.style.display = 'flex';
   
}else if(num === 3){
    selectInfo.style.width = '940px';
    selectInfo.style.height = '630px';
    selectInfo.style.transition = '0.4s';
    center.style.left = '-120%';
    center.style.transition = '0.4s';
   
    conjointInfo.style.left = '0px';
    conjointInfo.style.transition = '0.4s'; 
    backDiv.style.display = 'flex';
}else{
    
    selectInfo.style.width = '300px';
    selectInfo.style.height = '420px';
    selectInfo.style.overflowY = 'hidden';
    selectInfo.style.transition = '0.4s';
    center.style.left = '0%';
 
    monInfo.style.left = '120%';
    monInfo.style.transition = '0.4s';
    pereInfo.style.left = '120%';
    pereInfo.style.transition = '0.4s';
    

    mereInfo.style.left = '120%';
    mereInfo.style.transition = '0.4s';

    conjointInfo.style.left = '120%';
    conjointInfo.style.transition = '0.4s'; 
    backDiv.style.display = 'none';
    backDiv.style.transition = '0.4s';
}


}



function ToBack(num){
     
    console.log(num);
    selectInfo.style.width = '300px';
    selectInfo.style.height = '420px';
    selectInfo.style.overflowY = 'hidden';
    selectInfo.style.transition = '0.4s';
    center.style.left = '0%';
 
    monInfo.style.left = '120%';
    monInfo.style.transition = '0.4s';
    pereInfo.style.left = '120%';
    pereInfo.style.transition = '0.4s';
    

    mereInfo.style.left = '120%';
    mereInfo.style.transition = '0.4s';
    backDiv.style.display = 'none';
    backDiv.style.transition = '0.4s';

    conjointInfo.style.left = '120%';
    conjointInfo.style.transition = '0.4s'; 
    //function
   
//verify();
    blur(num);
}


/*--------------MENU-------------*/

let menuLink = document.querySelectorAll('#span'),
    toast = document.querySelector('.toast'),
    toastOK = document.querySelector('.toastSend'),
    toastDocReq = document.querySelector('.toastDocReq'),
    DocReqBack = document.querySelector('#bac'),
    OKSend = document.querySelector('#OK'),
    nomDocTag =  document.querySelectorAll('#nomDoc'),
    confBtn = document.querySelectorAll('#conf'),
    h2 = document.querySelectorAll('#h2');
//check if who want the doc have what requires
   

        console.log('isAgeOK = '+isAgeOk);
 
  let storeDocID = "",
      ViewDocRequested = false,
      isCert_marriage = false,
      isCasier = false,
      isID = false,
      isCertID = false,
      isCertID_eligible = false,
      isBon_cond_Requested = false,
      is_bonn_cond_eligible = false,
      bonne_cond_status = "",
      isBon_cond_valid = false; 
menuLink.forEach((link ,i ,arr)=>{
          link.onclick = ()=>{
            if(i === 0 || i === 1){
                isIdDoc = true;
                if(i === 1){
                    isCertID = true;
                let id_num = document.getElementById('id_num').value;
                if(id_num === 'NO ID'){
                 console.log('To be able to request this doc you must have an ID');
                }else{
                isCertID_eligible = true;
                }
            }else{
                isID = true;
            }
            }else{
                isIdDoc = false;
            }

            if(i === 3){
                isCert_marriage = true;
            }
            if(i === 4){
                isBon_cond_Requested = true;
                let id_num = document.getElementById('id_num').value;
                if(id_num === 'NO ID'){
                 console.log('not eligible to request this doc');
                }else{
                is_bonn_cond_eligible = true;

                }
            }
            if(i === 5){
                isCasier = true;
                let bonne_cond = document.querySelector('.bon_cond');
                if(bonne_cond){
                   // alert('exist');
                    bonne_cond_status = bonne_cond.innerHTML;
                }else{
                   console.log('bonne_conduite not found');

                }
               // alert(bonne_cond_status);
                if(bonne_cond_status === 'Validé'){
                    isBon_cond_valid = true;
                }
            }
            nomDocTag.forEach((val ,j ,array)=>{
                console.log('nomDocTag '+j);
                if(nomDocTag[j].innerHTML === h2[i].innerHTML){
                
                  //  alert("already Requested this doc");
                    ViewDocRequested = true;

                    
                }
             });
             if(ViewDocRequested === false){
                if(storeDocID === ''){
                    storeDocID = i;
                    Toast();
                }else{
                    console.log('already request a doc');
                }
             }else{
              toastDocReq.style.transform = 'scale(1)';
              toastDocReq.style.transition = '0.4s';
             }
          
           
           // setTimeout(()=>{
               
           // },500);
        
        
          }
});
DocReqBack.onclick = ()=>{
    location.reload();
}

completeBtn.onclick = () => {
 // alert(isCert_marriage);
    if(isOk === true){
        if( isIdDoc && !isAgeOk && isID){
            
                alert('your age is not supported for the ID');
            
              //  MyDocReg();
              localStorage.removeItem('doc');
              location.reload();

       
       
        }else  if(isCertID && !isCertID_eligible){
            alert("You don't have an ID");
            
            //  MyDocReg();
            localStorage.removeItem('doc');
            location.reload(); 
        }else{
          
            if(!isMarried && isCert_marriage === true){
                alert('You are not married');
                localStorage.removeItem('doc');
                location.reload();
            }else if(!isBon_cond_valid && isCasier === true && bonne_cond_status !==""){
                alert("Bonne conduite n'est pas validé");
                localStorage.removeItem('doc');
                location.reload();
            }else if(!isBon_cond_valid && isCasier === true && bonne_cond_status ===""){
                alert("Bonne conduite n'existe pas");
                localStorage.removeItem('doc');
                location.reload();
            }else if(!is_bonn_cond_eligible && isBon_cond_Requested){
                alert('You are not elgible to request a bonne conduite because you don t have an ID');
                localStorage.removeItem('doc');
                location.reload();
            }else{
            MyDocReg();
            }
        }
    }else if(isOk === false){
        console.log('plus complete your info first');
    }else{
        optionInfoDiv();
       // alert('option');
    }
}


function MyDocReg() {
    let docName = localStorage.getItem('doc'),
    itemId = localStorage.getItem('itemId');
 console.log(docName);
let xhr = new XMLHttpRequest();
    xhr.open('POST','regDocument.php?doc='+docName+'&itemId='+itemId,true);
    xhr.onload=()=>{
       if(xhr.status === 200){
         //  alert('complete submit doc');
         let response = xhr.responseText;
         alert(response);
           storeDocID = 'OK';
           Toast();
           selectInfo.style.transform = 'translate(-50%,-50%) scale(0)';
        selectInfo.style.transition = '0.4s';
           localStorage.removeItem('doc');
           localStorage.removeItem('itemId');
           //location.reload();
       }else{
           alert('error');
       }
    }
    xhr.send();
  }

function Toast(){
    if(storeDocID=== ''){
        toast.style.transform = 'scale(0)';
        toast.style.transition = '0.4s';
    }else if(storeDocID === 'OK'){
        toastOK.style.transform = 'scale(1)';
        toastOK.style.transition = '0.4s';
       // alert('TOAST ok');
    }else{
        toast.style.transform = 'scale(1)';
        toast.style.transition = '0.4s'; 
    };

  


  
}
OKSend.onclick = ()=>{
    location.reload();
}
confBtn.forEach((val,i ,arr)=>{
    val.onclick = ()=>{
        
       
      /// console.log(storeDocID);
      if(i === 0){
        
        ReqDoc(storeDocID);
        storeDocID = '';
        Toast();
      }else{
        storeDocID = '';
        Toast();
      }
    }
})
function ReqDoc(i){
    let data = localStorage.getItem('doc');
    localStorage.setItem('itemId',`${i}`);

   console.log('data is setted '+i);
   if(data === null){
     //  alert('aucun data');
     nomDocTag.forEach((val ,j ,array)=>{
        console.log('nomDocTag '+val);
     })
     let docName = h2[i].innerHTML;
     console.log('h2 '+docName);
     localStorage.setItem('doc',`${docName}`);
     let data1 = localStorage.getItem('doc');
     console.log(data1);
     isVisible();
     blur(number);
   }else{
       blur(number);
      isVisible();
   }
};


function isVisible(){
    let data = localStorage.getItem('doc');
           
            if(data !== null){
    selectInfo.style.transform = 'translate(-50%,-50%) scale(1)';
                selectInfo.style.transition = '0.4s';
                blurDefault();
            }else{
                console.log('no doc was selected');
            }
}
/*---------------Me options to view------------*/
let meOptionsBtn = document.querySelector('#more');
let MeOpen = false;

meOptionsBtn.onclick = ()=>{
    MeOpen = true;
    optionInfoDiv();
    console.log('isOK '+isOk);
    isOk = 'autre';
    completeBtn.innerHTML = 'Continue'
}

function optionInfoDiv(){
    console.log(MeOpen);
    if(MeOpen === false){
        selectInfo.style.transform = 'translate(-50%,-50%) scale(0)';
        selectInfo.style.transition = '0.4s';
        BtnComplete();
        console.log('isOK '+isOk);
    }else{
        selectInfo.style.transform = 'translate(-50%,-50%) scale(1)';
    selectInfo.style.transition = '0.4s';
    MeOpen = false;
    
    }
    
}

//What to blur 

let header = document.querySelector('header'),
    userDiv = document.querySelector('.user'),
    docDiv = document.querySelector('.doc');

    function blurDefault(){
        header.style.filter = 'blur(4px)';
        header.style.transition = '0.4s';

        userDiv.style.filter = 'blur(4px)';
        userDiv.style.transition = '0.4s';

        docDiv.style.filter = 'blur(4px)';
        docDiv.style.transition = '0.4s';
    };

    function blur(num){
        if(num !== 3){
            header.style.filter = 'blur(4px)';
            header.style.transition = '0.4s';

            userDiv.style.filter = 'blur(4px)';
            userDiv.style.transition = '0.4s';

            docDiv.style.filter = 'blur(4px)';
            docDiv.style.transition = '0.4s';

        }else {
            
              /*  header.style.filter = 'blur(0px)';
                header.style.transition = '0.4s';
    
                userDiv.style.filter = 'blur(0px)';
                userDiv.style.transition = '0.4s';
    
                docDiv.style.filter = 'blur(0px)';
                docDiv.style.transition = '0.4s'; */
              //  alert('i m blur ');
                number = '';
            
        }
        
    }

    //verify all input
if(partnerBtn){

    partnerBtn.onclick = () => {
        //alert('You clicked meInfo');
        number = 3;
        myFront(number);
     // myInfo();
     //console.log(number);
     }
}