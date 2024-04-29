let id_code = document.querySelector('#id_code');

let code = '';
let str = 'ABCDEFGHIJKLMNOPKRSTUVWXYZ123456789';

window.addEventListener("load",()=>{
    for(let i = 0;i<10;i++){
        code += str.charAt(Math.floor(Math.random()*str.length));
    };
 id_code.value = code;
 console.log(code);
});