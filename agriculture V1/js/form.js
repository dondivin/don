let form = document.querySelector('form'),
prov = document.querySelector('#sel'),
meter = document.querySelector('#number'),
mesure = document.querySelector('#selMeter'),
date = document.querySelector('#date'),
send = document.querySelector('#btn');

let noProv = document.querySelector('.noProv'),
    noMeter = document.querySelector('.noNum'),
    noMesure = document.querySelector('.notypeMesure'),
    noDate = document.querySelector('.noDate');

send.addEventListener("click",()=>{
console.log(date.value);
if(prov.value == ''){
noProv.style.display = 'block';
form.addEventListener("submit",(e)=>{
e.preventDefault();
})
}else if(prov.value != ''){
noProv.style.display = 'none';
send.addEventListener("submit",()=>{
console.log(e);
  
});
};
if(meter.value == ''){
noMeter.style.display = 'block';
form.addEventListener("submit",(e)=>{
e.preventDefault();
})
}else if(meter.value != ''){
noMeter.style.display = 'none';
send.addEventListener("submit",()=>{
console.log(e);
});
};

if(mesure.value == ''){
noMesure.style.display = 'block';
form.addEventListener("submit",(e)=>{
e.preventDefault();
})
}else if(mesure.value != ''){
noMesure.style.display = 'none';
send.addEventListener("submit",()=>{
console.log(e);
});
};
if(date.value == ''){
noDate.style.display = 'block';
form.addEventListener("submit",(e)=>{
e.preventDefault();
})
}else if(date.value != ''){
noDate.style.display = 'none';
send.addEventListener("submit",()=>{
console.log(e);
});
};

});