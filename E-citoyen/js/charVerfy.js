file = document.querySelector('#file');

//submit button
let send = document.querySelector('#send');
btn = document.querySelector('#profil');
let nom = document.querySelector('#nom'),
    phone = document.querySelector('#phone'),
    num_id = document.querySelector('#id'),
    imgName = document.querySelector('#img'),
    form = document.querySelector('.forms'),
    prenom = document.querySelector('#prenom'),



    nomErr = document.querySelector('#nomErr'),
    prenomErr = document.querySelector('#prenomErr'),
    phoneErr = document.querySelector('#phoneErr'),
    idErr = document.querySelector('#idErr');

btn.addEventListener("click", () => {
    file.click();
});

file.addEventListener("change", () => {
    fileName = file.files;
    let imgSrc = URL.createObjectURL(fileName[0]);
    console.log(fileName[0].name);
    name = fileName[0].name;
    imgName.src = imgSrc;
    console.log(file);
});


setInterval(() => {


    let a = nom.value,
        b = prenom.value;

    // let b = new Array(a);

    //checking name contain only alphabet
    if (a != '') {
        if (onlyLetters(a)) {
            //  console.log('true');
            nomErr.style.display = 'none';
        } else {
            nomErr.style.display = 'block';
        };
    };

    if (b != '') {
        if (onlyLetters(b)) {
            prenomErr.style.display = 'none';

        } else {
            prenomErr.style.display = 'block';
        }
    };

    //console.log(onlyLetters(a));
    //checking if phone numbers are numbers

    let phoneNum = phone.value;
    if (phoneNum != '') {
        if (onlyNumbers(phoneNum)) {
            //console.log(true);
            phoneErr.style.display = 'none';
        } else {
            phoneErr.style.display = 'block';

        };
    };
    //checking if id is numbers only

    let id = num_id.value;
    if (id != '') {
        if (onlyNumbers(id)) {
            //console.log(true);
            idErr.style.display = 'none';
        } else {
            idErr.style.display = 'block';

        }
    };
}, 500);

//prevent on submit

send.addEventListener("click", () => {


    let a = nom.value,
        b = prenom.value;

    // let b = new Array(a);

    //checking name contain only alphabet
    if (a != '') {
        if (onlyLetters(a)) {
            console.log('true');
            nomErr.style.display = 'none';
        } else {
            nomErr.style.display = 'block';
            event.preventDefault();
        };
    };
    if (b != '') {
        if (onlyLetters(b)) {
            prenomErr.style.display = 'none';

        } else {
            prenomErr.style.display = 'block';
            event.preventDefault();
        }
    };
    //console.log(onlyLetters(a));
    //checking if phone numbers are numbers

    let phoneNum = phone.value;
    if (phoneNum != '') {
        if (onlyNumbers(phoneNum)) {
            console.log(true);
            phoneErr.style.display = 'none';
        } else {
            phoneErr.style.display = 'block';

            event.preventDefault();
        };
    };
    //checking if id is numbers only

    let id = num_id.value;
    if (id != '') {
        if (onlyNumbers(id)) {
            console.log(true);
            idErr.style.display = 'none';
        } else {
            idErr.style.display = 'block';
            event.preventDefault();
        }
    };
});



//chech if input contain only letters

function onlyLetters(str) {
    return /^[a-z ]+$/i.test(str);
};


//CHECK NUMBERS
function onlyNumbers(num) {
    return /^[0-9 / . +]+$/i.test(num);
};