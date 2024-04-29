label = document.querySelectorAll('label'),
    input = document.querySelectorAll('input');

label.forEach((val, i, arr) => {
    val.onclick = () => {
        console.log(i);
        input[i].click();
    }
});

input.forEach((val, i, arr) => {
    val.onclick = () => {
        // console.log(i + ' input');
        label[i].style.height = '40%';
        label[i].style.transition = '0.4s';
        label[i].style.color = 'dodgerblue';

    }
})

setInterval(() => {
    input.forEach((val, i, arr) => {
        if (input[i].value !== '') {
            label[i].style.height = '40%';
            label[i].style.transition = '0.4s';
            label[i].style.color = 'dodgerblue';
        }
        // console.log(i + ' input');



    })
}, 500);