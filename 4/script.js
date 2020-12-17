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