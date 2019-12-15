// function check_input(attr){
// var check= attr.getAttribute("uk-icon")
// if (check == "icon: plus"){
//     document.getElementById("domen").setAttribute("style", "display:on")
//     attr.setAttribute("uk-icon", "icon: close")
//     attr.setAttribute("uk-tooltip", "title: Закрыть поле для получения данных")
// }
// else if (check == "icon: close"){
//     document.getElementById("domen").setAttribute("style", "display:none")
//     attr.setAttribute("uk-icon", "icon: plus")
// }
// }

function cross(){                                              
var longlink= document.getElementById("txt").value;
var domein= document.getElementById("domein").value;
if(longlink == ""){
alert("Введите ссылку")
}
else{
    if (domein == ""){
        send(longlink,false);
        }
        else{
        send(longlink,domein);
        }
}
}

function send(longlink,domein){
const request = new XMLHttpRequest();
var url="http://localhost/dev/obrat/?l="+longlink ;
if (domein!=false){
    url+="&pb_d="+domein;
}
//request.setRequestHeader('Content-Type', 'application/x-www-form-url');
request.addEventListener("readystatechange", () => {
    if (request.readyState === 4 && request.status === 200) {
        document.getElementById("small_link").value=request.responseText
        console.log( request.responseText );
    }
});
    request.open('GET', url);
    request.send();
}



function copyTextToClipboard(text) {
    if(text!=""){
        if (!navigator.clipboard) {
            fallbackCopyTextToClipboard(text);
            
            return;
            }
            navigator.clipboard.writeText(text).then(function() {
            UIkit.notification("Ссылка скопированна", {
            status: 'success'
            });
            }, function(err) {
            UIkit.notification("Ссылка не скопированна", {
            status: 'danger'
            });
            });
    }
else{
    UIkit.notification("Ссылка не скопированна, поле пустое", {
        status: 'danger'
        });
}
}

function search_info() {                                              
    var search= document.getElementById("search").value;
    if (search == ""){
        alert("Введите ссылку")
    }
    else {
        var link_request = new XMLHttpRequest();
        link_request.addEventListener("readystatechange", () => {
        //var link="assets/rqst.php?search="+search ;
        if (link_request.readyState === 4 && link_request.status === 200) {
            document.getElementById("info").innerHTML=link_request.responseText
            //console.log(link_request.responseText );
            }
        });
    };
        link_request.open('GET', "assets/rqst.php?search="+search);
        link_request.send();
}
