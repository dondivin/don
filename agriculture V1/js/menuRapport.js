let menu = document.querySelector(".admin"),
    openMenu = document.querySelector(".openMenu"),
    closeMenu = document.querySelector('.close');

    openMenu.addEventListener("click", ()=>{
        menu.style.left = 0+'%';
        menu.style.transition = '0.7s';
    });
    closeMenu.addEventListener("click", ()=>{
        menu.style.left = -65+'%';
        menu.style.transition = '0.7s';
    });