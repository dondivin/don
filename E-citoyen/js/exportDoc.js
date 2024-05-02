
var node = document.querySelector('.doc');
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
    a.download = "GovDocument.png";
    a.click();
    }, 2000);
}

