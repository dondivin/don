let logout = document.querySelector('.logout'),
    contH1 = document.querySelector('#continue'),
    toastDeco = document.querySelector('.toastDeco'),
    confBtn1 = document.querySelectorAll('#confDec');
/*
    toast = document.querySelector('.toast'),
    toastOK = document.querySelector('.toastSend'),
    toastDocReq = document.querySelector('.toastDeco'),
    DocReqBack = document.querySelector('#bac'),
    OKSend = document.querySelector('#OK'),
    nomDocTag =  document.querySelectorAll('#nomDoc'),
    confBtn = document.querySelectorAll('#conf'),
    h2 = document.querySelectorAll('#h2');*/

logout.onclick = ()=>{
    Toast1();
   
};

confBtn1.forEach((val ,i ,arr)=>{
    val.onclick = ()=>{
        Toast1(i);
    }
})


function Toast1(num){
    if(num === 0){
        toastDeco.style.transform = 'scale(1)';
        toastDeco.style.transition = '0.4s';
        //alert('logout clicked');
        location.href = 'logout.php';
        location.reload();
        localStorage.removeItem('doc');
    }else if(num === 1){
        toastDeco.style.transform = 'scale(0)';
        toastDeco.style.transition = '0.4s';
       // alert('TOAST ok');
    }else{
        toastDeco.style.transform = 'scale(1)';
        toastDeco.style.transition = '0.4s'; 
      //  contH1.innerHTML = "Voulez-vous continuer à se déconnecter?";
    };

  
};


  

