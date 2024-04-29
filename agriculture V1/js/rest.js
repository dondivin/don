let button = document.querySelector('button');
let form = document.querySelector('form');
button.addEventListener("click",()=>{
    let input = document.querySelector('input');
let a = input.value;
    if(a === '0'){
        alert('ego'+a);
        console.log(a);
  /*  form.addEventListener("submit",e=>{
        e.preventDefault();
    })*/
}else{
    event.preventDefault();
}
})