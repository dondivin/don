label = document.querySelectorAll('label'),
    input = document.querySelectorAll('input');

label.forEach((val, i, arr) => {
    val.onclick = () => {
       // console.log(i);
        input[i].click();
        input[i].focus();
        if(i>0){
            if(input[i-1].value === ""){
                label[i-1].style.height = '100%';
        label[i-1].style.transition = '0.4s';
        label[i-1].style.color = 'rgba(0, 0, 0, 0.658)';
            }
        }
    }
});

input.forEach((val, i, arr) => {
    val.onclick = () => {
        // console.log(i + ' input');
        label[i].style.height = '40%';
        label[i].style.transition = '0.4s';
        label[i].style.color = 'dodgerblue';

    }
})

setInterval(() => {
    for (let i = 0; i < input.length; i++) {
        
        if (input[i].value !== '') {
            label[i].style.height = '40%';
            label[i].style.transition = '0.4s';
            label[i].style.color = 'dodgerblue';
        }
       // console.log(i + ' input');
    }
       
         


}, 500);



let logBtn = document.querySelector('#log'),
     regBtn = document.querySelector('#reg'),
     span = document.querySelector('#bar')
     login = document.querySelector('#login'),
     FormDiv = document.querySelector('.bigSite'),
     register = document.querySelector('#register');

  logBtn.onclick = () =>{
    logBtn.style.color = 'dodgerblue';
    logBtn.style.transition ='0.4s';
    regBtn.style.color = '#00000063';
    regBtn.style.transition ='0.4s';
    login.style.left = '50%';
    login.style.transition = '0.4s';
    register.style.left = '150%';
    register.style.transition = '0.4s';
    span.style.left = '0%';
    span.style.transition = '0.4s';
    span.style.borderBottomRightRadius = '10px';
    span.style.borderBottomLeftRadius = '0px';
    FormDiv.style.height = '600px';
    FormDiv.style.transition = '0.4s';
   
  }   
  
  regBtn.onclick = () =>{
    logBtn.style.color = '#00000063';
    logBtn.style.transition ='0.4s';
    regBtn.style.color = 'dodgerblue';
    regBtn.style.transition ='0.4s';
    login.style.left = '-50%';
    login.style.transition = '0.4s';
    register.style.left = '50%';
    register.style.transition = '0.4s';
    span.style.left = '50%';
    span.style.transition = '0.4s';
    span.style.borderBottomRightRadius = '0px';
    span.style.borderBottomLeftRadius = '10px';
    FormDiv.style.height = '900px';
    FormDiv.style.transition = '0.4s';
  } 



 

 
