var pageNumber = 0;
list = document.getElementById('list');
doAjax = document.getElementById('doAjax');

function ajax(page) {
    var debug = false;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var controlScript = "core/calender.php";
    var httpString = controlScript + "?page=" + page;
    var httpResponse = null;
    if (debug) console.log(httpString);
    xmlhttp.open("GET", httpString, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (debug) console.log("http response = " + xmlhttp.responseText);
            httpResponse = xmlhttp.responseText;
            var result = httpResponse;
            if (result !== '[]') {
                result = JSON.parse(result);
            }
            if (debug) console.log(result);
            for (var i=0; i < 1; i++) {
                if (result !== '[]') {
                    var cContentdiv = document.createElement("div");
                    cContentdiv.setAttribute("class", "cContent");
                    list.appendChild(cContentdiv);

                    var head = document.createElement("div");
                    head.setAttribute("class", "head");
                    var headp = document.createElement("h4");
                    var headtxt = document.createTextNode(result[i].title);
                    cContentdiv.appendChild(head);
                    head.appendChild(headp);
                    headp.appendChild(headtxt);


                    var note = document.createElement("div");
                    note.setAttribute("class", "note");
                    var notep = document.createElement("p");
                    var notetxt = document.createTextNode(result[i].content);
                    cContentdiv.appendChild(note);
                    note.appendChild(notep);
                    notep.appendChild(notetxt);

                    var location = document.createElement("div");
                    location.setAttribute("class", "location");
                    var locationp = document.createElement("p");
                    var locationtxt = document.createTextNode(result[i].locatie);
                    cContentdiv.appendChild(location);
                    location.appendChild(locationp);
                    locationp.appendChild(locationtxt);
                } else {
                    var cContentdiv = document.createElement("div");
                    cContentdiv.setAttribute("class", "cContent");
                    list.appendChild(cContentdiv);

                    var head = document.createElement("div");
                    head.setAttribute("class", "head");
                    var headp = document.createElement("h4");
                    var headtxt = document.createTextNode('Leeg');
                    cContentdiv.appendChild(head);
                    head.appendChild(headp);
                    headp.appendChild(headtxt);
                    doAjax.style.visibility = 'hidden';
                }
            }
        }
    }
}

ajax(pageNumber);

document.getElementById("doAjax").addEventListener("click", nextPage);

function nextPage() {
    pageNumber += 1;
    ajax(pageNumber);
    return pageNumber;
}