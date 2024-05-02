let count = 0;

if(count === 0){
    var node = document.querySelector('.carte');

    let imageUrl;

    domtoimage.toPng(node)
    .then(function(dataUrl) {
        /* var img = new Image();
         img.src = dataUrl;
         document.body.appendChild(img);*/
        //  document.getElementById('im').src = dataUrl;
        imageUrl = dataUrl;
    })
    .catch(function(error) {
        console.error('oops, something went wrong!', error);
    });
    
    setTimeout(() => {
    let a = document.createElement('a');
    a.href = imageUrl;
    a.download = "carteFront.png";
    a.click();
    count = 1;
    }, 2000);
    
    
}


setTimeout(()=>{
    if(count === 1){
        var node = document.querySelector('.carte1');

        let imageUrl;
        domtoimage.toPng(node)
        .then(function(dataUrl) {
            /* var img = new Image();
             img.src = dataUrl;
             document.body.appendChild(img);*/
            //  document.getElementById('im').src = dataUrl;
            imageUrl = dataUrl;
        })
        .catch(function(error) {
            console.error('oops, something went wrong!', error);
        });
        
        setTimeout(() => {
        let a = document.createElement('a');
        a.href = imageUrl;
        a.download = "carteBack.png";
        a.click();
        }, 2000);
    }

},5000)



