let certDiv = document.querySelector('.certDiv'),
    selCateg = document.querySelector('#sel_cat');

    console.log(selCateg.value);
    setInterval(()=>{
        let val = selCateg.value;
        console.log(selCateg.value);

if(val === 'CERTIFIER'){
    certDiv.style.display = 'block';
    certDiv.style.transition = '0.5s';
}else{
    certDiv.style.display = 'none';
    certDiv.style.transition = '0.5s';
}


        
    },100);
