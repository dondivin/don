let p = document.querySelectorAll('p'),
    input = document.querySelectorAll('input');

input.forEach((val, i, arr) => {
    val.onclick = () => {
        p[i].style.left = '2%';
        p[i].style.height = '40%';
        p[i].style.color = 'dodgerblue';
        p[i].style.transition = '0.4s';
        // console.log(i);
    }
});

p.forEach((par, j, array) => {
    par.onclick = () => {
        input[j].click();
        // console.log(j);
    }
})