var node = document.querySelector('.carte1');

let imageUrl;


window.onload = () => {
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
    }, 5000);
}