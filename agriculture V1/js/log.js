let password = document.querySelector('#nuumber').value,
confirmPass = document.querySelector('#nuumber1').value,
register = document.querySelector('.register'),
form = document.querySelector('#form1');
setInterval(()=>{

console.log(password);
console.log(confirmPass);
},1000)

form.addEventListener("submit", e=>{
    e.preventDefault();
    if(password.value != confirmPass.value){
       
        alert('password must be the same');
    }
})