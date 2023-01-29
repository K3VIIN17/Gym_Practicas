function Login(){
    var xmlHTTP;
    if(window.XMLHttpRequest){
        xmlHTTP = new XMLHttpRequest();
    } else{
        xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var email = document.getElementById('email2').value;
    var password = document.getElementById('password2').value;
   
    xmlHTTP.onreadystatechange = function(){
        if(xmlHTTP.readyState == 4 && xmlHTTP.status == 200){
        document.getElementById('alertaLogin').innerHTML = xmlHTTP.responseText;
            if(xmlHTTP.responseText == "Usuario Correcto"){
                window.location='principal.php';

            }
        }

    }

    var url = "PHP/loginUser.php?email2="+email+"&password2="+password;

    xmlHTTP.open("GET", url, true);
    xmlHTTP.send();
}