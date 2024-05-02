let docDiv = document.querySelectorAll('.allDocs');
let open = false;
docDiv.forEach((val ,i ,arr)=>{
    val.onclick = ()=>{
       // alert('doc clicked '+i);
     if(open === false){
        docDiv[i].style.height = '325px';
        docDiv[i].style.borderBottom = '3px solid #00000045';
        docDiv[i].style.transition = '0.7s';
        open = true;
     }else{
        docDiv[i].style.height = '70px';
        setTimeout(()=>{
         docDiv[i].style.borderBottom = 'none';
        },700);
      
        docDiv[i].style.transition = '0.7s';
        open = false;
     }
     
    }
})