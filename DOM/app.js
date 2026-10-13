

function changeHeading() {
    document.getElementById("heading").innerHTML =
        "Welcome to JavaScript DOM";
}
function changeColor() {
    document.querySelector("p").style.color = "blue";

    
    let elements = document.getElementsByClassName("info");

    for (let i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor = "yellow";
    }
}


function showText() {
    let text = document.getElementById("textbox").value;
    alert(text);
}
