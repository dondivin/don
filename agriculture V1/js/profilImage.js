let fullIm = document.querySelector('#imgFull'),
    imgProfil = document.querySelector('#img'),
    cancel = document.querySelector('#closeIcon'),
    fullImgDiv = document.querySelector('.fullImg'),
    site = document.querySelector('.site');


    imgProfil.addEventListener("click",()=>{
        fullIm.src = imgProfil.src;
        fullImgDiv.style.display = 'block';
        site.style.display = 'none';
    });
    cancel.addEventListener("click",()=>{
        fullImgDiv.style.display = 'none';
        site.style.display = 'grid';
    });