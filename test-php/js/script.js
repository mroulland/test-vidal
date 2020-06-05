var elements = 5;
var more = 5;

function getMore(){

    var file = "ajax.php";
    var parametres ="quantity="+elements;

    if(elements < 25){
        if(window.XMLHttpRequest){
            var xhttp = new XMLHttpRequest;
        } else {
            var xhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xhttp.open("POST", file);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhttp.onreadystatechange = function(){
            if(xhttp.readyState == 4 && xhttp.status == 200){
                var obj = JSON.parse(xhttp.responseText);

                var section = document.getElementsByTagName('section')[0];
                section.insertAdjacentHTML('beforeend', obj);

                scrollTo({
                    top:document.getElementsByTagName("article")[elements-1].offsetTop,
                    behavior:'smooth'
                });
            }
        }
        xhttp.send(parametres);

        if(elements < 25) elements += more;
        if(elements == 25){
            // On supprime le bouton voir plus
            document.getElementsByClassName("more")[0].remove();
        }
    }


}