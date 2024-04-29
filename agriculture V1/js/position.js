function showLocation(pos){
    let lat = pos.coords.latitude;
    let long = pos.coords.longitude;
    alert("latitude "+lat+" longitude "+long);
        }
        function error(err){
            if(err.code===1){
                alert('Access denied');
            }else if(err.code===2){
                alert('position is not available');
            }
        };
        function getLocation(){
            if(navigator.geolocation){
                let options = {
                    timeout:60000
                };
                navigator.geolocation.getCurrentPosition(showLocation,error,options);
            }else{
            alert('browser does not support geolocation');
        }
        };
        window.addEventListener("load",()=>{
            getLocation();
        });