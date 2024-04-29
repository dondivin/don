let prov = document.querySelectorAll('#prov'),
    commu = document.querySelectorAll('#com'),
    collin = document.querySelectorAll('#coll'),
    typ_cul = document.querySelectorAll('#typ_cul'),
    sper = document.querySelectorAll('#sper'),
    categ = document.querySelectorAll('#categ'),
    saison = document.querySelectorAll('#saison'),
    date = document.querySelectorAll('#date'),
    other = document.querySelectorAll('#other');
    let listMenu = document.querySelectorAll(".h1");
    console.log(listMenu[0]);

    //database data

let french = document.querySelector("#lang").value;

console.log('french is '+french);

    if(french === 'on'){
        console.log('french mode is on');
        console.log(other);
    }else{
        //mode phone
        prov[0].innerHTML = 'INTARA';
        commu[0].innerHTML = 'IKOMINE';
        collin[0].innerHTML = 'UMUTUMBA';
        typ_cul[0].innerHTML = "UBWOKO BW'IGITEGWA";
        sper[0].innerHTML = "UKO HANGANA";
        categ[0].innerHTML = "UMUGWI";
        saison[0].innerHTML = "IGIHE C'IRIMA";
        date[0].innerHTML = "ITARIKI";
        other[0].innerHTML = "Utuntu n'utundi";
        //mode pc
        prov[1].innerHTML = 'INTARA';
       // commu[1].innerHTML = 'IKOMINE';
      //  collin[1].innerHTML = 'UMUTUMBA';
       // typ_cul[1].innerHTML = "UBWOKO BW'IGITEGWA";
        sper[1].innerHTML = "UKO HANGANA";
     //   categ[1].innerHTML = "UMUGWI";
     //   saison[1].innerHTML = "IGIHE C'IRIMA";
        date[1].innerHTML = "ITARIKI";
        other[1].innerHTML = "Utuntu n'utundi";

        //Menu PRINCIPAL

        listMenu[0].innerHTML = 'Umwidondoro';
        listMenu[1].innerHTML = "I karata y' isi";
        listMenu[2].innerHTML = 'I konti';
        listMenu[3].innerHTML = 'Raporo';
        listMenu[5].innerHTML = 'Kuvayo';

    

    }