let file = document.querySelector('#file'),
    btnGen = document.querySelector('#gen'),
    fileOpen = document.querySelector('#photoView'),
    imgView = document.querySelector('#imgView'),
    imgTxt = document.querySelector('#chose'),
    badge = document.querySelector('.badge'),
    nameBadge = document.querySelector('#nameBadge'),
    phoneBadge = document.querySelector('#phones'),
    imageBagdeView = document.querySelector('#imgBadge'),
    textForm = document.querySelector('#h1'),
    exportImg = document.querySelector('#export'),
    codeView = document.querySelector('#codes');

let fileName = "",
    imgSrc;
fileOpen.addEventListener('click', () => {
    file.click();

})

file.addEventListener("change", () => {
    fileName = file.files[0];
    imgSrc = URL.createObjectURL(fileName);
    imgView.src = imgSrc;
    imgView.style.display = 'block';
    imgTxt.style.display = 'none';
})


btnGen.addEventListener('click', () => {
    let name = document.querySelector("#name").value,
        code = document.querySelector('#code').value,
        phone = document.querySelector('#phone').value;

    if (fileName !== "") {
        badge.style.display = "grid";
        textForm.style.display = 'none';
        nameBadge.innerHTML = name;
        phoneBadge.innerHTML = phone;
        imageBagdeView.src = imgSrc;
        codeView.innerHTML = code;
        exportImg.style.transform = "scale(1)";
        exportImg.style.transition = '0.4s';
    } else {
        alert('no image selected');
    }

});

var node = document.getElementById('badge');
let imageUrl;
exportImg.addEventListener('click', () => {



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
        a.download = "efezaBadge.png";
        a.click();
    }, 2000);


})