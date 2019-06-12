
window.onscroll = function() {sticking()};

const navbar = document.querySelector(".stick-nav");
let stick = navbar.offsetTop;


function sticking(){
    navbar.style.height = navbar.offsetHeight;
    //console.log("sitckuje!");
    if(window.pageYOffset >= stick){
        console.log("działam!");
        navbar.classList.add("stick");
    } else {
        navbar.classList.remove("stick");
    }
};


function height(){
    console.log("działam!");
    navbar.style.height = navbar.offsetHeight;
};

