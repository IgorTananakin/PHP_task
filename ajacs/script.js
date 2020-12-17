var ao = createAjaxObject();
function createAjaxObject(){
    var ao = null;

    try{
        ao = new XMLHttpRequest();

    }catch(e){
        try{
            a0 = ActiveXObject("Msxml2.XHTTP");

        }catch(e){
            try{ao = ActiveXObject("Microsoft.XMLHTTP");
        }catch(e){
            alert("Ваш браузер не поддерживает ajax");
            return false;
        }
    }
}

    return ao;
}

function Process(){
    if(ao.readyState == 4 || ao.readyState == 0){
        name = document.getElementById('usertext').value;
        ao.open("GET","handler.php?name="+name,true);
        ao.onreadystatechange = getData;
        ao.send(null);
    }
}

function getData(){
    if(ao.readyState == 4 || ao.status == 200){
        resp = ao.responseText;
        document.getElementById('result').innerHTML =resp;
    }
}
