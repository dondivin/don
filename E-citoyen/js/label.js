label = document.querySelectorAll('label'),
    inputBox = document.querySelectorAll('.input');

    inputBox.forEach((val ,i ,arr)=>{
        if(inputBox[i].value !== ''){
            label[i].style.height = '40%';
            label[i].style.transition = '0.4s';
            label[i].style.color = 'dodgerblue';
        }

        val.onclick = ()=>{
           // console.log("input after label "+inputBox[0]);
           // alert(i);
            label[i].style.height = '40%';
            label[i].style.transition = '0.4s';
            label[i].style.color = 'dodgerblue';
            for(let j = i-1;j>0;j--){
                if(label[j].htmlFor !== 'dateNaissance'){
                    if(inputBox[j].value === ''){
                        label[j].style.height = '100%';
                        label[j].style.transition = '0.4s';
                        label[j].style.color = 'rgba(0, 0, 0, 0.658)'; 
                    }
                }
          
            };

            for(let j = i+1;j<inputBox.length;j++){
                if(label[j].htmlFor !== 'dateNaissance'){
                if(inputBox[j].value === ''){
                    label[j].style.height = '100%';
                    label[j].style.transition = '0.4s';
                    label[j].style.color = 'rgba(0, 0, 0, 0.658)'; 
                }
            }
          
            }
        }
       
    })

    label.forEach((val,i,arr)=>{
                //Exception
if(label[i].htmlFor === 'dateNaissance'){
    label[i].style.height = '40%';
    label[i].style.transition = '0.4s';
    label[i].style.color = 'dodgerblue';
}
        val.onclick = ()=>{
            // alert(i);
            label[i].style.height = '40%';
            label[i].style.transition = '0.4s';
            label[i].style.color = 'dodgerblue';
            inputBox[i].click();
            inputBox[i].focus();
           console.log("input after label "+input[0]);
      
        }
    })

setInterval(()=>{
    for(let i = 0; i < inputBox.length; i++){
        if(inputBox[i].value !== ''){
            label[i].style.height = '40%';
            label[i].style.transition = '0.4s';
            label[i].style.color = 'dodgerblue';
        }
    }
},500);




/*label.forEach((val, i, arr) => {
    val.onclick = () => {
        console.log(label[i]);
        input[i].click();
        input[i].focus();
        if(i>0){
            if(input[i-1].value === ""){
                label[i-1].style.height = '100%';
        label[i-1].style.transition = '0.4s';
        label[i-1].style.color = 'rgba(0, 0, 0, 0.658)';
            }
        }
       
          //  console.log('label '+i);
          
    }
    if(label[i].htmlFor === 'dateNaissance'){
        label[i].style.height = '40%';
        label[i].style.transition = '0.4s';
        label[i].style.color = 'dodgerblue';
    }
});
/*
for(let i = 0; i < label.length; i++){
    if(label[i].htmlFor === 'dateNaissance'){
        label[i].style.height = '40%';
        label[i].style.transition = '0.4s';
        label[i].style.color = 'dodgerblue';
    }
}


input.forEach((val, i, arr) => {
    val.onclick = () => {
        // console.log(i + ' input');
        label[i].style.height = '40%';
        label[i].style.transition = '0.4s';
        label[i].style.color = 'dodgerblue';

        for(let j = i+1;j<input.length;j++){
           // console.log('input '+j);
            if(input[j].value === '' ){
                label[j].style.height = '100%';
                label[j].style.transition = '0.4s';
                label[j].style.color = 'rgba(0, 0, 0, 0.658)';
            }
        }
        for(let k = i-1;k>-1;k--){
            if(input[k].value === '' ){
                label[k].style.height = '100%';
                label[k].style.transition = '0.4s';
                label[k].style.color = 'rgba(0, 0, 0, 0.658)';
            }
           // console.log('ooh'+k);
        }

        for(let i = 0; i < label.length; i++){
            if(label[i].htmlFor === 'dateNaissance'){
                label[i].style.height = '40%';
                label[i].style.transition = '0.4s';
                label[i].style.color = 'dodgerblue';
            }
        }
    


    }
})

setInterval(() => {
    input.forEach((val, i, arr) => {
        if (input[i].value !== '') {
            label[i].style.height = '40%';
            label[i].style.transition = '0.4s';
            label[i].style.color = 'dodgerblue';
           // console.log(i + ' input');
        }
        // console.log(i + ' input');



    })
   
}, 500);

*/


let logBtn = document.querySelector('#log'),
     regBtn = document.querySelector('#reg'),
     span = document.querySelector('#bar')
     login = document.querySelector('#login'),
     FormDiv = document.querySelector('.bigSite'),
     register = document.querySelector('#register');
if(logBtn){
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
}

  if(regBtn){
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
        FormDiv.style.height = '800px';
        FormDiv.style.transition = '0.4s';
      } 
  }




 

 
