let mini = document.querySelector('.mini'),
mai = document.querySelector('.admin'),
menuClose = document.querySelector('.canc');


mini.addEventListener("mouseover",(e)=>{
    console.log(e);
    mini.style.transform = 'translateX(-100%)';
    mini.style.transition = '0.5s';
    mai.style.transform = 'translateX(0px)';
    mai.style.transition = '0.5s';
});
/*content.addEventListener("mousover",(e)=>{
    console.log(e);
    mini.style.transform = 'translateX(0%)';
    mini.style.transition = '0.5s';
    mai.style.transform = 'translateX(-100%)';
    mai.style.transition = '0.5s';
});*/
menuClose.addEventListener("click",()=>{
   // alert('closing');
    mini.style.transform = 'translateX(0%)';
    mini.style.transition = '0.5s';
    mai.style.transform = 'translateX(-100%)';
    mai.style.transition = '0.5s';
});

