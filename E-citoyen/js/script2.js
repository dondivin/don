let selectInfo = document.querySelector('.selectInfo'),
backBtn = document.querySelector('#back'),
backDiv = document.querySelector('.back'),
center = document.querySelector('.center'),
meBtn = document.querySelector('.me'),
pereBtn = document.getElementById('pere'),
mereBtn = document.getElementById('mere'),
monInfo = document.querySelector('.monInfo'),
pereInfo = document.querySelector('.pereInfo'),
mereInfo = document.querySelector('.mereInfo');


let plusInfo = document.querySelector('#plusInfo'),
    docSelect = document.querySelector('.btnInfo');


window.onload = () => {
    setTimeout(()=>{
        docSelect.style.height = '711px';
        docSelect.style.transition = '1s';
    },1000)
   
}

let selectDoc = document.querySelector('.span');



plusInfo.onclick = ()=>{
    
    noticeDiv.style.height = '500px';
    noticeDiv.style.transition = '0.4s';

}

let checkComplete = document.querySelectorAll('.check'),
    inputMe = document.querySelectorAll('.inputMe'),
    inputPere = document.querySelectorAll('.inputPere'),
    inputMere = document.querySelectorAll('.inputMere');

    let checkedMe = false,
        checkedPere = false,
        checkedMere = false;
       let checkInput = setInterval(()=>{
           
       
  for(let i = 0;i < inputMe.length;i++){
    if(inputMe[i].value === ''){
        checkedMe = true;
    }else{
        checkedMe = false;
    }
  };
  for(let i = 0;i < inputPere.length;i++){
    if(inputPere[i].value === ''){
        checkedPere = true;
    }else{
        checkedPere = false;
    }
  };
  for(let i = 0;i < inputMere.length;i++){
    if(inputMere[i].value === ''){
        checkedMere = true;
    }else{
        checkedMere = false;
    }
  };
console.log('Input '+checkedMe);
/*console.log(checkedPere);
console.log(checkedMere);*/

let registerbtn = document.querySelectorAll('#send'),
    loading = document.querySelectorAll('#btnload');

    registerbtn.forEach((val ,i ,arr)=>{
        val.onclick = ()=>{
            if(i === 0){
                myInfo();
                loading[i].style.display = 'block';
            }else if(i === 1){
                myPere();
                loading[i].style.display = 'block';
            }else if(i === 2){
                mereInform();
                loading[i].style.display = 'block';
            }
           
        }
    })



if(checkedMe === false){
    checkComplete[0].style.display = 'block';
}else{
    checkComplete[0].style.display = 'none';
};

if(checkedPere === false){
    checkComplete[1].style.display = 'block';
}else{
    checkComplete[1].style.display = 'none';
};
if(checkedMere === false){
    checkComplete[2].style.display = 'block';
}else{
    checkComplete[2].style.display = 'none';
}

},500) ;
let number;

backDiv.onclick = () => {
   /* number = 3;
    Retour(number);*/
   // alert('Retour');
   number = 3;
   ToBack();
   alert('ToBack');

}
meBtn.onclick = () => {
    //alert('You clicked meInfo');
    number = 0;
    myFront(number);
 // myInfo();
 }

pereBtn.onclick = () => {
    //alert('You clicked pereInfo');
    number = 1;
    myFront(number);
  //myPere();
}

mereBtn.onclick = () => {
    //alert('You clicked mereInfo');
    number = 2;
    myFront(number);
 // Mymon();
}

function myFront(num){
 
if(num === 0){
    selectInfo.style.width = '940px';
selectInfo.style.height = '650px';
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
   
}else{
    
    selectInfo.style.width = '300px';
    selectInfo.style.height = '420px';
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
}


}



function ToBack(num){
     
    selectInfo.style.width = '300px';
    selectInfo.style.height = '420px';
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
}