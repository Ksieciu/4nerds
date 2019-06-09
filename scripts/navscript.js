
window.onscroll = function() {sticking()};

const navbar = document.querySelector(".stick-nav");
let stick = navbar.offsetTop;


function sticking(){
    console.log("sitckuje!");
    if(window.pageYOffset >= stick){
        navbar.classList.add("stick");
    } else {
        navbar.classList.remove("stick");
    }
};


function height(){
    return navbar.offsetHeight;
};

