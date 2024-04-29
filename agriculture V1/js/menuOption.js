let option = document.querySelectorAll('.op');
let optBtn = document.querySelectorAll('.opt');
let bool = true;

optBtn.forEach((val,index,optBtn)=>{
     
val.addEventListener("click",()=>{
    if(bool){
        if(index===0){

       
        option[0].style.transform = 'scale(1)';
        option[0].style.transition = '0.5s';
        bool = false;
    }else{
        option[1].style.transform = 'scale(1)';
        option[1].style.transition = '0.5s';
        bool = false; 
    }
    }else{
        if(index === 0){
            option[0].style.transform = 'scale(0)';
            option[0].style.transition = '0.5s';
            bool = true; 
        }else{
            option[1].style.transform = 'scale(0)';
            option[1].style.transition = '0.5s';
            bool = true; 
        }
    
    }
   
})
})