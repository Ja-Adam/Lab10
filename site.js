ResponseHttpRepuest("searchData.php","",function(data){
    var json_data = JSON.parse(data);
    document.getElementById("result").innerText = json_data[0];
});

function ResponseHttpRepuest(searchdata,param,callback){
    var xhttp = new XMLHttpRequest();   
    xhttp.open('POST',searchdata);
    xhttp.onreadystatechange = function(){
        if(xhttp.readyState == 4 && xhttp.states == 200){
            // console.log()
            callback(xhttp.responseText);
        }
    }
    xhttp.setRequestHeader("COntent-type","applicaition/x-www-form-urlencoded");
    xhttp.setRequestHeader("Charset","UTF-8");
    xhttp.send(param);
    return xhttp;
}