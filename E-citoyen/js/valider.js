function valider(doc,usersID,userID){
    let char = "1234567890",
        char1 = "1234567890",
        char2 = "1234567890";
        let id1="",
            id2 ="",        
            id3="";
for(let i = 1; i < 4; i++){
     id1 += char.charAt(Math.floor(Math.random()*char.length));
     id2 += char1.charAt(Math.floor(Math.random()*char.length));
     id3 += char2.charAt(Math.floor(Math.random()*char.length));
}

   let idGen = id1+'/'+id2+'.'+id3;
      // idGenStr = idGen.toString();
    let idGenStr = `${idGen}`;

   console.log(idGenStr);
   
let xhr = new XMLHttpRequest();
   // xhr.open("POST","valider.php?doc="+doc+"&usersID="+usersID+"&userID="+userID+"&idGen"+idGenStr,true);
  // xhr.open("POST","valider.php?doc="+doc+"&usersID="+usersID+"&userID="+userID+"&id1"+id1+"&id2="+id2+"&id3"+id3,true);
  xhr.open("POST","valider.php?doc="+doc+"&usersID="+usersID+"&userID="+userID+"&idGen="+idGenStr,true);
    xhr.onload = ()=>{
        if(xhr.status === 200){
          let response = xhr.responseText;
            alert(response);
            location.reload();
          // location.href = `valider.php?doc=${doc}&usersID=${usersID}&userID=${userID}&idGen=${idGenStr}`;
            
        }else{
            alert('Validation failed');
        }
    }
    xhr.send();
    //alert(doc+" "+usersID+" "+userID);*/
}

function Rejeter(doc,usersID){
  
let xhr = new XMLHttpRequest();
  
  xhr.open("POST","rejeter.php?doc="+doc+"&usersID="+usersID,true);
    xhr.onload = ()=>{
        if(xhr.status === 200){
            alert('Rejection is done');
            location.reload();
          // location.href = `valider.php?doc=${doc}&usersID=${usersID}&userID=${userID}&idGen=${idGenStr}`;
            
        }else{
            alert('Rejection failed');
        }
    }
    xhr.send();
    //alert(doc+" "+usersID+" "+userID);*/
}

