var inputElement = document.getElementById('name');
var res = document.getElementById('res');
inputElement.onkeyup = function () {
    var xmlHttp = new XMLHttpRequest();
    var value = inputElement.value;
    var serverPage = 'server.php?data='+value;
    xmlHttp.open('GET',serverPage);
    xmlHttp.onreadystatechange = function (){
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
               // alert(xmlHttp.responseText);
            res.innerHTML = xmlHttp.responseText;
            };
    };
    xmlHttp.send(null);
};