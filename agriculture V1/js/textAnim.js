let LogTxt = document.querySelectorAll("h2"),
        inputLog = document.querySelectorAll(".lo");

        console.log(LogTxt);

        inputLog.forEach(function(val ,index,arr){

val.addEventListener("click",()=>{
    console.log(index);
 if(index == 0){
   LogTxt[0].style.transform = 'translateX(-100px) translateY(-170%)';
   LogTxt[0].style.transition = '0.5s';
 }else if(index == 1){
    LogTxt[1].style.transform = 'translateX(-100px) translateY(-170%)';
   LogTxt[1].style.transition = '0.5s';
 }

})
        });

    //sign up

    let signTxt = document.querySelectorAll("h3"),
        inputSign = document.querySelectorAll(".reg");

        inputSign.forEach(function(val ,i ,arr){
            val.addEventListener("click",()=>{
                console.log(i);
                if(i == 0){
                    signTxt[i].style.transform = 'translateX(-100px) translateY(-170%)';
                    signTxt[i].style.transition = '0.5s';
                }else if(i == 1){
                    signTxt[i].style.transform = 'translateX(-100px) translateY(-170%)';
                    signTxt[i].style.transition = '0.5s'; 
                }else if(i == 2){
                    signTxt[i].style.transform = 'translateX(-100px) translateY(-170%)';
                    signTxt[i].style.transition = '0.5s';
                }else if(i == 3){
                    signTxt[i].style.transform = 'translateX(-100px) translateY(-170%)';
                    signTxt[i].style.transition = '0.5s';
                }
            })
            
        })