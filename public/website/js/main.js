const menuBtn = document.getElementById("menu-btn");
const sidebar = document.getElementById("sidebar");
const closeBtn = document.getElementById("close-btn");

// sidebar
if(menuBtn){
    menuBtn.addEventListener("click",()=>{
        sidebar.style.right="0";
    });
}

if(closeBtn){
    closeBtn.addEventListener("click",()=>{
        sidebar.style.right="-320px";
    });
}


// =======================
// FAKE AR SYSTEM
// =======================

const arBtn = document.getElementById("ar-btn");
const fakeAR = document.getElementById("fake-ar");
const closeAR = document.getElementById("close-ar");

if(arBtn){
    arBtn.addEventListener("click",()=>{
        fakeAR.classList.remove("hidden");
    });
}

if(closeAR){
    closeAR.addEventListener("click",()=>{
        fakeAR.classList.add("hidden");
    });
}




// =======================
// FOODS PAGE POPUP
// =======================

const foodPopup = document.getElementById("food-popup");
const popupModel = document.getElementById("popup-model");
const foodPreviews = document.querySelectorAll(".food-preview");
const closeFoodPopup = document.getElementById("close-food-popup");

if(foodPreviews.length > 0){

    foodPreviews.forEach((img)=>{

        img.addEventListener("click",()=>{

            foodPopup.classList.remove("hidden");

            document.body.style.overflow="hidden";

            popupModel.src = img.dataset.model;

        });

    });

}

if(closeFoodPopup){

    closeFoodPopup.addEventListener("click",()=>{

        foodPopup.classList.add("hidden");

        document.body.style.overflow="auto";
        

        popupModel.removeAttribute("src");

    });

}




foodPopup.addEventListener("click",(e)=>{

    if(e.target===foodPopup){

        foodPopup.classList.add("hidden");

        popupModel.removeAttribute("src");

        document.body.style.overflow="auto";

    }

});






// ESC KEY CLOSE

document.addEventListener("keydown",(e)=>{

    if(e.key==="Escape"){

        if(foodPopup && !foodPopup.classList.contains("hidden")){

            foodPopup.classList.add("hidden");

            popupModel.removeAttribute("src");

            document.body.style.overflow="auto";

        }

    }

});



foodPreviews.forEach((img)=>{

    img.addEventListener("click",()=>{

        document.body.style.cursor="progress";

        setTimeout(()=>{

            document.body.style.cursor="default";

        },10);

    });

});