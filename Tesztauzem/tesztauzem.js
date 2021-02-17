window.addEventListener('load',init)

function init(){
    document.getElementById("gomb").addEventListener("click",torol_kiir)
}

function torol_kiir(){
    document.getElementById("jatek-valasz").value="";
    alert("Köszönjük, hogy részt vesz a játékunkban!");
}