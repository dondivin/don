let fullImg1 = document.querySelector('#imgFull1'),
    imgProfil1 = document.querySelector('#profil1'),
    cancel1 = document.querySelector('#closeIcon1'),
    fullImgDiv1 = document.querySelector('.fullImg1'),
    site1 = document.querySelector('.site1');


    imgProfil1.addEventListener("click",()=>{
        fullImg1.src = imgProfil1.src;
        fullImgDiv1.style.display = 'block';
        site1.style.display = 'none';
    });
    cancel1.addEventListener("click",()=>{
        fullImgDiv1.style.display = 'none';
        site1.style.display = 'grid';
    });
setInterval(()=>{
    if(window.innerWidth > 700){
        // alert(true);
        site1.style.display = 'none';
        fullImgDiv1.style.display = 'none';
     }else{
        site1.style.display = 'grid';
     }
},1000)
  