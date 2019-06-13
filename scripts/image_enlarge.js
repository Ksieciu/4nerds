let body = document.getElementsByTagName("body")[0];

//nasłuchujemy kliknięć w całym body naszej strony. Jeżeli został kliknięty obraz, to zostaje on powiększony
body.addEventListener("click", function(e) {

    const item = e.target;
    const itemParentID = e.target.parentElement;

    if(item.className == "image-display"){
        const modal = document.querySelector(".modal");
        const image = document.querySelector(".modal-img");
        const name = document.querySelector(".img-name");
        const desc = document.querySelector(".desc");
        modal.style.display = "block";
        image.src = item.src;
        name.innerHTML = item.alt;
        desc.innerHTML = itemParentID.childNodes[1].innerHTML;
        

        const closeBtn = document.querySelector(".close");
        if(closeBtn){
            closeBtn.onclick = function(){
                modal.style.display = "none";
            }
        }
            
    }
}) 

