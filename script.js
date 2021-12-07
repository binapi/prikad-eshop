var d = document;

var hover = d.querySelectorAll(".item");

function app_mouseenter(){
    d.querySelector(".click_me").style.display = "block";
};

for(var i = 0; i <hover.lenght; i++){
    hover[i].addEventListener("mouseenter", app_mouseenter);
};