let radio = document.querySelector('#rad'),
rad = document.querySelector('.rad'),
trigger = document.querySelector('.radi');
let input = document.querySelector('#rad');
let on = false;
if(input.value === 'on'){
    rad.style.background = 'dodgerblue';
        trigger.style.background = 'aliceblue';
        trigger.style.left = 48+'%';
        input.value = 'on';
        on = true;
}else{
    rad.style.background = 'aliceblue';
        trigger.style.background = 'dodgerblue';
        trigger.style.left = 4+'%';
        input.value = 'off';
        on = false;
};
rad.addEventListener("click",()=>{
    if(on == false){
        rad.style.background = 'dodgerblue';
        trigger.style.background = 'aliceblue';
        trigger.style.left = 48+'%';
        input.value = 'on';
        on = true;
    }else{
        rad.style.background = 'aliceblue';
        trigger.style.background = 'dodgerblue';
        trigger.style.left = 4+'%';
        input.value = 'off';
        on = false;
    };
    console.log(input. value);
})
