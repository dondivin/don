let btnLog = document.querySelector("#btnLog"),
btnReg = document.getElementById('btnReg'),
login = document.querySelector(".login"),
sign = document.querySelector(".sign"),
bg = document.querySelector('.bg');


let onleft = true;
btnLog.addEventListener("click", ()=>{

   if(onleft == false){
       bg.style.left = 22+'%';
       bg.style.transition = '0.3s';
       btnReg.style.color = 'black';
       btnLog.style.color = 'aliceblue';
       login.style.left = 0+'%';
       login.style.transition = '0.3s';
       sign.style.left = 100+'%';
       sign.style.transition = '0.3s';
       onleft = true;
   }


})
btnReg.addEventListener("click",()=>{
   if(onleft == true){
       bg.style.left = 78+'%';
       bg.style.transition = '0.3s';
       login.style.left = -90+'%';
       login.style.transition = '0.3s';
       sign.style.left = 0+'%';
       sign.style.transition = '0.3s';
       btnLog.style.color = 'black';
       btnReg.style.color = 'aliceblue';
       onleft = false;
   }
})