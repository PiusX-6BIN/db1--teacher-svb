
let request = new XMLHttpRequest();

function LoadData(text) {
    request.open("GET", "data.php?recept=" + text);
    
    request.addEventListener("load", LuisterNaarEvent);

    request.send();
}

function LuisterNaarEvent() {
    let response = JSON.parse(request.response);
    console.log(response);
}