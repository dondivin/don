let userId = document.querySelector('#userId');

function idGenerate(){
    let num = '0123456789',
        idGen = '';
    for(let i = 0;i<6;i++){
        idGen += num.charAt(Math.floor(Math.random()*6));
        console.log(idGen);
        userId.value = idGen;
    }
   return idGen;
}

idGenerate();