let input = document.querySelectorAll('.inputMe'),
    provinceIsSelected = document.querySelector('.province'),
    communeIsSelected = document.querySelector('.commune'),
    optionInnerHtml = document.querySelectorAll('#commune'),
    btnSend = document.querySelector('#send');
    let id,
        provSelected = false;

    provinceIsSelected.onchange = ()=>{
      /*  if(optionInnerHtml){
            //communeIsSelected.removeChild(optionInnerHtml);
            for(let i=0; i<optionInnerHtml.length; i++){
            optionInnerHtml[i].parentNode.removeChild(optionInnerHtml);
            }
        }*/

        //alert('province selected is '+provinceIsSelected.value);
       if(provSelected === false){
        province.forEach((val,i,arr)=>{
            
            if(province[i].PROVINCE_NAME === provinceIsSelected.value){
                 id = province[i].PROVINCE_ID;
                 console.log("province de "+province[i].PROVINCE_NAME)
            
            }
            })

            commune.forEach((val ,j ,arr)=>{
                if(commune[j].PROVINCE_ID === id){
                    
                   // console.log("communes "+commune[j].COMMUNE_NAME);
                   let option = document.createElement("option");
                    option.value = commune[j].COMMUNE_NAME;
                    option.setAttribute("id",'commune');
                    option.innerHTML = commune[j].COMMUNE_NAME;
                   communeIsSelected.appendChild(option); 
            
                }
                
            })
            provSelected = true;
        }else{
            location.reload();
        }
    }



    
let province = [
    {
        "PROVINCE_ID": "1",
        "PROVINCE_NAME": "BUBANZA"
    },
    {
        "PROVINCE_ID": "2",
        "PROVINCE_NAME": "BUJUMBURA"
    },
    {
        "PROVINCE_ID": "3",
        "PROVINCE_NAME": "BUJUMBURA MAIRIE"
    },
    {
        "PROVINCE_ID": "4",
        "PROVINCE_NAME": "BURURI"
    },
    {
        "PROVINCE_ID": "5",
        "PROVINCE_NAME": "CANKUZO"
    },
    {
        "PROVINCE_ID": "6",
        "PROVINCE_NAME": "CIBITOKE"
    },
    {
        "PROVINCE_ID": "7",
        "PROVINCE_NAME": "GITEGA"
    },
    {
        "PROVINCE_ID": "8",
        "PROVINCE_NAME": "KARUSI"
    },
    {
        "PROVINCE_ID": "9",
        "PROVINCE_NAME": "KAYANZA"
    },
    {
        "PROVINCE_ID": "10",
        "PROVINCE_NAME": "KIRUNDO"
    },
    {
        "PROVINCE_ID": "11",
        "PROVINCE_NAME": "MAKAMBA"
    },
    {
        "PROVINCE_ID": "12",
        "PROVINCE_NAME": "MURAMVYA"
    },
    {
        "PROVINCE_ID": "13",
        "PROVINCE_NAME": "MUYINGA"
    },
    {
        "PROVINCE_ID": "14",
        "PROVINCE_NAME": "MWARO"
    },
    {
        "PROVINCE_ID": "15",
        "PROVINCE_NAME": "NGOZI"
    },
    {
        "PROVINCE_ID": "16",
        "PROVINCE_NAME": "RUMONGE"
    },
    {
        "PROVINCE_ID": "17",
        "PROVINCE_NAME": "RUTANA"
    },
    {
        "PROVINCE_ID": "18",
        "PROVINCE_NAME": "RUYIGI"
    },
    {
        "PROVINCE_ID": "19",
        "PROVINCE_NAME": "Sud-Kivu"
    },
    {
        "PROVINCE_ID": "20",
        "PROVINCE_NAME": "Nord-Kivu"
    },
    {
        "PROVINCE_ID": "21",
        "PROVINCE_NAME": "Kagera"
    },
    {
        "PROVINCE_ID": "22",
        "PROVINCE_NAME": "BUJUMBURA RURAL"
    },
    {
        "PROVINCE_ID": "23",
        "PROVINCE_NAME": "Région de Dakar"
    }
]

/*let option = document.createElement("option");
option.value = "NGOZI";
option.innerHTML = "NGOZI";
provinceIsSelected.appendChild(option);*/

let commune = [
  {
      "COMMUNE_ID": "1",
      "COMMUNE_NAME": "BISORO",
      "PROVINCE_ID": "14"
  },
  {
      "COMMUNE_ID": "2",
      "COMMUNE_NAME": "BUBANZA",
      "PROVINCE_ID": "1"
  },
  {
      "COMMUNE_ID": "3",
      "COMMUNE_NAME": "BUGABIRA",
      "PROVINCE_ID": "10"
  },
  {
      "COMMUNE_ID": "4",
      "COMMUNE_NAME": "BUGANDA",
      "PROVINCE_ID": "6"
  },
  {
      "COMMUNE_ID": "5",
      "COMMUNE_NAME": "BUGARAMA",
      "PROVINCE_ID": "16"
  },
  {
      "COMMUNE_ID": "6",
      "COMMUNE_NAME": "BUGENDANA",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "7",
      "COMMUNE_NAME": "BUGENYUZI",
      "PROVINCE_ID": "8"
  },
  {
      "COMMUNE_ID": "8",
      "COMMUNE_NAME": "BUHIGA",
      "PROVINCE_ID": "8"
  },
  {
      "COMMUNE_ID": "9",
      "COMMUNE_NAME": "BUHINYUZA",
      "PROVINCE_ID": "13"
  },
  {
      "COMMUNE_ID": "10",
      "COMMUNE_NAME": "BUKEMBA",
      "PROVINCE_ID": "17"
  },
  {
      "COMMUNE_ID": "11",
      "COMMUNE_NAME": "BUKEYE",
      "PROVINCE_ID": "12"
  },
  {
      "COMMUNE_ID": "12",
      "COMMUNE_NAME": "BUKINANYANA",
      "PROVINCE_ID": "6"
  },
  {
      "COMMUNE_ID": "13",
      "COMMUNE_NAME": "BUKIRASAZI",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "14",
      "COMMUNE_NAME": "BURAMBI",
      "PROVINCE_ID": "16"
  },
  {
      "COMMUNE_ID": "15",
      "COMMUNE_NAME": "BURAZA",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "16",
      "COMMUNE_NAME": "BURURI",
      "PROVINCE_ID": "4"
  },
  {
      "COMMUNE_ID": "17",
      "COMMUNE_NAME": "BUSIGA",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "18",
      "COMMUNE_NAME": "BUSONI",
      "PROVINCE_ID": "10"
  },
  {
      "COMMUNE_ID": "19",
      "COMMUNE_NAME": "BUTAGANZWA",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "20",
      "COMMUNE_NAME": "BUTAGANZWA",
      "PROVINCE_ID": "18"
  },
  {
      "COMMUNE_ID": "22",
      "COMMUNE_NAME": "BUTEZI",
      "PROVINCE_ID": "18"
  },
  {
      "COMMUNE_ID": "23",
      "COMMUNE_NAME": "BUTIHINDA",
      "PROVINCE_ID": "13"
  },
  {
      "COMMUNE_ID": "24",
      "COMMUNE_NAME": "BUYENGERO",
      "PROVINCE_ID": "16"
  },
  {
      "COMMUNE_ID": "26",
      "COMMUNE_NAME": "BWAMBARANGWE",
      "PROVINCE_ID": "10"
  },
  {
      "COMMUNE_ID": "27",
      "COMMUNE_NAME": "BWERU",
      "PROVINCE_ID": "18"
  },
  {
      "COMMUNE_ID": "29",
      "COMMUNE_NAME": "CANKUZO",
      "PROVINCE_ID": "5"
  },
  {
      "COMMUNE_ID": "30",
      "COMMUNE_NAME": "CENDAJURU",
      "PROVINCE_ID": "5"
  },
  {
      "COMMUNE_ID": "33",
      "COMMUNE_NAME": "GAHOMBO",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "34",
      "COMMUNE_NAME": "GASHIKANWA",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "35",
      "COMMUNE_NAME": "GASHOHO",
      "PROVINCE_ID": "13"
  },
  {
      "COMMUNE_ID": "36",
      "COMMUNE_NAME": "GASORWE",
      "PROVINCE_ID": "13"
  },
  {
      "COMMUNE_ID": "37",
      "COMMUNE_NAME": "GATARA",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "38",
      "COMMUNE_NAME": "GIHANGA",
      "PROVINCE_ID": "1"
  },
  {
      "COMMUNE_ID": "39",
      "COMMUNE_NAME": "GIHARO",
      "PROVINCE_ID": "17"
  },
  {
      "COMMUNE_ID": "40",
      "COMMUNE_NAME": "GIHETA",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "41",
      "COMMUNE_NAME": "GIHOGAZI",
      "PROVINCE_ID": "8"
  },
  {
      "COMMUNE_ID": "43",
      "COMMUNE_NAME": "GISAGARA",
      "PROVINCE_ID": "5"
  },
  {
      "COMMUNE_ID": "44",
      "COMMUNE_NAME": "GISHUBI",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "45",
      "COMMUNE_NAME": "GISOZI",
      "PROVINCE_ID": "14"
  },
  {
      "COMMUNE_ID": "46",
      "COMMUNE_NAME": "GISURU",
      "PROVINCE_ID": "18"
  },
  {
      "COMMUNE_ID": "47",
      "COMMUNE_NAME": "GITANGA",
      "PROVINCE_ID": "17"
  },
  {
      "COMMUNE_ID": "48",
      "COMMUNE_NAME": "GITARAMUKA",
      "PROVINCE_ID": "8"
  },
  {
      "COMMUNE_ID": "49",
      "COMMUNE_NAME": "GITEGA",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "50",
      "COMMUNE_NAME": "GITERANYI",
      "PROVINCE_ID": "13"
  },
  {
      "COMMUNE_ID": "51",
      "COMMUNE_NAME": "GITOBE",
      "PROVINCE_ID": "10"
  },
  {
      "COMMUNE_ID": "52",
      "COMMUNE_NAME": "ISALE",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "53",
      "COMMUNE_NAME": "ITABA",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "54",
      "COMMUNE_NAME": "KABARORE",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "55",
      "COMMUNE_NAME": "KABEZI",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "58",
      "COMMUNE_NAME": "KANYOSHA",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "59",
      "COMMUNE_NAME": "KAYANZA",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "60",
      "COMMUNE_NAME": "KAYOGORO",
      "PROVINCE_ID": "11"
  },
  {
      "COMMUNE_ID": "61",
      "COMMUNE_NAME": "KAYOKWE",
      "PROVINCE_ID": "14"
  },
  {
      "COMMUNE_ID": "62",
      "COMMUNE_NAME": "KIBAGO",
      "PROVINCE_ID": "11"
  },
  {
      "COMMUNE_ID": "63",
      "COMMUNE_NAME": "KIGAMBA",
      "PROVINCE_ID": "5"
  },
  {
      "COMMUNE_ID": "66",
      "COMMUNE_NAME": "KINYINYA",
      "PROVINCE_ID": "18"
  },
  {
      "COMMUNE_ID": "67",
      "COMMUNE_NAME": "KIREMBA",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "68",
      "COMMUNE_NAME": "KIRUNDO",
      "PROVINCE_ID": "10"
  },
  {
      "COMMUNE_ID": "69",
      "COMMUNE_NAME": "MABANDA",
      "PROVINCE_ID": "11"
  },
  {
      "COMMUNE_ID": "70",
      "COMMUNE_NAME": "MABAYI",
      "PROVINCE_ID": "6"
  },
  {
      "COMMUNE_ID": "71",
      "COMMUNE_NAME": "MAKAMBA",
      "PROVINCE_ID": "11"
  },
  {
      "COMMUNE_ID": "72",
      "COMMUNE_NAME": "MAKEBUKO",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "73",
      "COMMUNE_NAME": "MARANGARA",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "74",
      "COMMUNE_NAME": "MATANA",
      "PROVINCE_ID": "4"
  },
  {
      "COMMUNE_ID": "75",
      "COMMUNE_NAME": "MATONGO",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "76",
      "COMMUNE_NAME": "MBUYE",
      "PROVINCE_ID": "12"
  },
  {
      "COMMUNE_ID": "77",
      "COMMUNE_NAME": "MISHIHA",
      "PROVINCE_ID": "5"
  },
  {
      "COMMUNE_ID": "78",
      "COMMUNE_NAME": "MPANDA",
      "PROVINCE_ID": "1"
  },
  {
      "COMMUNE_ID": "79",
      "COMMUNE_NAME": "MPINGA-KAYOVE",
      "PROVINCE_ID": "17"
  },
  {
      "COMMUNE_ID": "80",
      "COMMUNE_NAME": "MUBIMBI",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "81",
      "COMMUNE_NAME": "MUGAMBA",
      "PROVINCE_ID": "4"
  },
  {
      "COMMUNE_ID": "82",
      "COMMUNE_NAME": "MUGINA",
      "PROVINCE_ID": "6"
  },
  {
      "COMMUNE_ID": "83",
      "COMMUNE_NAME": "MUGONGO-MANGA",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "84",
      "COMMUNE_NAME": "MUHANGA",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "85",
      "COMMUNE_NAME": "MUHUTA",
      "PROVINCE_ID": "16"
  },
  {
      "COMMUNE_ID": "86",
      "COMMUNE_NAME": "MUKIKE",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "87",
      "COMMUNE_NAME": "MURAMVYA",
      "PROVINCE_ID": "12"
  },
  {
      "COMMUNE_ID": "88",
      "COMMUNE_NAME": "MURUTA",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "89",
      "COMMUNE_NAME": "MURWI",
      "PROVINCE_ID": "6"
  },
  {
      "COMMUNE_ID": "91",
      "COMMUNE_NAME": "MUSIGATI",
      "PROVINCE_ID": "1"
  },
  {
      "COMMUNE_ID": "92",
      "COMMUNE_NAME": "MUSONGATI",
      "PROVINCE_ID": "17"
  },
  {
      "COMMUNE_ID": "93",
      "COMMUNE_NAME": "MUTAHO",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "94",
      "COMMUNE_NAME": "MUTAMBU",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "95",
      "COMMUNE_NAME": "MUTIMBUZI",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "96",
      "COMMUNE_NAME": "MUYINGA",
      "PROVINCE_ID": "13"
  },
  {
      "COMMUNE_ID": "97",
      "COMMUNE_NAME": "MWAKIRO",
      "PROVINCE_ID": "13"
  },
  {
      "COMMUNE_ID": "98",
      "COMMUNE_NAME": "MWUMBA",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "99",
      "COMMUNE_NAME": "NDAVA",
      "PROVINCE_ID": "14"
  },
  {
      "COMMUNE_ID": "101",
      "COMMUNE_NAME": "NGOZI",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "102",
      "COMMUNE_NAME": "NTEGA",
      "PROVINCE_ID": "10"
  },
  {
      "COMMUNE_ID": "103",
      "COMMUNE_NAME": "NYABIHANGA",
      "PROVINCE_ID": "14"
  },
  {
      "COMMUNE_ID": "104",
      "COMMUNE_NAME": "NYABIRABA",
      "PROVINCE_ID": "2"
  },
  {
      "COMMUNE_ID": "105",
      "COMMUNE_NAME": "NYABITSINDA",
      "PROVINCE_ID": "18"
  },
  {
      "COMMUNE_ID": "107",
      "COMMUNE_NAME": "NYAMURENZA",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "108",
      "COMMUNE_NAME": "NYANZA-LAC",
      "PROVINCE_ID": "11"
  },
  {
      "COMMUNE_ID": "109",
      "COMMUNE_NAME": "NYARUSANGE",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "110",
      "COMMUNE_NAME": "RANGO",
      "PROVINCE_ID": "9"
  },
  {
      "COMMUNE_ID": "112",
      "COMMUNE_NAME": "RUGAZI",
      "PROVINCE_ID": "1"
  },
  {
      "COMMUNE_ID": "113",
      "COMMUNE_NAME": "RUGOMBO",
      "PROVINCE_ID": "6"
  },
  {
      "COMMUNE_ID": "114",
      "COMMUNE_NAME": "RUHORORO",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "115",
      "COMMUNE_NAME": "RUMONGE",
      "PROVINCE_ID": "16"
  },
  {
      "COMMUNE_ID": "116",
      "COMMUNE_NAME": "RUSAKA",
      "PROVINCE_ID": "14"
  },
  {
      "COMMUNE_ID": "117",
      "COMMUNE_NAME": "RUTANA",
      "PROVINCE_ID": "17"
  },
  {
      "COMMUNE_ID": "118",
      "COMMUNE_NAME": "RUTEGAMA",
      "PROVINCE_ID": "12"
  },
  {
      "COMMUNE_ID": "119",
      "COMMUNE_NAME": "RUTOVU",
      "PROVINCE_ID": "4"
  },
  {
      "COMMUNE_ID": "120",
      "COMMUNE_NAME": "RUYIGI",
      "PROVINCE_ID": "18"
  },
  {
      "COMMUNE_ID": "121",
      "COMMUNE_NAME": "RYANSORO",
      "PROVINCE_ID": "7"
  },
  {
      "COMMUNE_ID": "122",
      "COMMUNE_NAME": "SHOMBO",
      "PROVINCE_ID": "8"
  },
  {
      "COMMUNE_ID": "123",
      "COMMUNE_NAME": "SONGA",
      "PROVINCE_ID": "4"
  },
  {
      "COMMUNE_ID": "124",
      "COMMUNE_NAME": "TANGARA",
      "PROVINCE_ID": "15"
  },
  {
      "COMMUNE_ID": "125",
      "COMMUNE_NAME": "VUGIZO",
      "PROVINCE_ID": "11"
  },
  {
      "COMMUNE_ID": "126",
      "COMMUNE_NAME": "VUMBI",
      "PROVINCE_ID": "10"
  },
  {
      "COMMUNE_ID": "127",
      "COMMUNE_NAME": "VYANDA",
      "PROVINCE_ID": "4"
  },
  {
      "COMMUNE_ID": "128",
      "COMMUNE_NAME": "NYABIKERE",
      "PROVINCE_ID": "8"
  },
  {
      "COMMUNE_ID": "129",
      "COMMUNE_NAME": "KIGANDA",
      "PROVINCE_ID": "12"
  },
  {
      "COMMUNE_ID": "130",
      "COMMUNE_NAME": "MUTUMBA",
      "PROVINCE_ID": "8"
  },
  {
      "COMMUNE_ID": "131",
      "COMMUNE_NAME": "NTAHANGWA",
      "PROVINCE_ID": "3"
  },
  {
      "COMMUNE_ID": "132",
      "COMMUNE_NAME": "MUHA",
      "PROVINCE_ID": "3"
  },
  {
      "COMMUNE_ID": "133",
      "COMMUNE_NAME": "MUKAZA",
      "PROVINCE_ID": "3"
  }
]

province.forEach((val,i,arr)=>{

    let option = document.createElement("option");
    option.value = province[i].PROVINCE_NAME;
    option.innerHTML = province[i].PROVINCE_NAME;
    provinceIsSelected.appendChild(option); 
  
})
btnSend.onclick = ()=>{
    let userID = input[0].value,
        provinceSelcted = provinceIsSelected.value,
        communeSelected = communeIsSelected.value,
        post = input[1].value,
        zone = input[4].value;

        let xhr = new XMLHttpRequest();
            xhr.open('POST',"admin.php?userID="+userID+"&post="+post+"&prov="+provinceSelcted+"&com="+communeSelected+"&zone="+zone,true);
          
            xhr.onload = ()=>{
              if(xhr.status === 200){
                let response = xhr.responseText;
                  alert(response);

                  location.reload();
              }else{
                  alert('Modication failed');
                  location.reload();
              }
            }
            xhr.send();
  }