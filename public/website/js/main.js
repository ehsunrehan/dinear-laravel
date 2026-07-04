const menuBtn = document.getElementById("menu-btn");
const sidebar = document.getElementById("sidebar");
const closeBtn = document.getElementById("close-btn");

if(menuBtn && sidebar){

    menuBtn.addEventListener("click",()=>{

        sidebar.classList.add("active");

        document.body.style.overflow="hidden";

    });

}

if(closeBtn && sidebar){

    closeBtn.addEventListener("click",closeSidebar);

}

function closeSidebar(){

    sidebar.classList.remove("active");

    document.body.style.overflow="auto";

}


// Click outside = close

document.addEventListener("click",(e)=>{

    if(!sidebar || !menuBtn) return;

    if(

        sidebar.classList.contains("active")

        &&

        !sidebar.contains(e.target)

        &&

        !menuBtn.contains(e.target)

    ){

        closeSidebar();

    }

});


// ESC key

document.addEventListener("keydown",(e)=>{

    if(e.key==="Escape"){

        closeSidebar();

    }

});


// =======================
// VIEW IN AR
// =======================

const arBtn = document.getElementById("ar-btn");
const fakeAR = document.getElementById("fake-ar");
const closeAR = document.getElementById("close-ar");
const arModel = document.querySelector("#fake-ar model-viewer");

function closeARPopup(){

    fakeAR.classList.add("hidden");

    document.body.style.overflow="auto";

    if(arModel){
        arModel.removeAttribute("src");
    }

}

if(arBtn){

    arBtn.addEventListener("click",()=>{

        fakeAR.classList.remove("hidden");

        document.body.style.overflow="hidden";

        if(arModel){

            arModel.src=document.querySelector(".food-left model-viewer").src;

        }

    });

}

if(closeAR){

    closeAR.addEventListener("click",closeARPopup);

}

// Outside Click

if(fakeAR){

    fakeAR.addEventListener("click",(e)=>{

        if(e.target===fakeAR){

            closeARPopup();

        }

    });

}

// ESC Close

document.addEventListener("keydown",(e)=>{

    if(e.key==="Escape"){

        closeARPopup();

    }

});




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




if(foodPopup){

    foodPopup.addEventListener("click",(e)=>{

        if(e.target===foodPopup){

            foodPopup.classList.add("hidden");

            popupModel.removeAttribute("src");

            document.body.style.overflow="auto";

        }

    });

}






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


if(foodPreviews.length){

    foodPreviews.forEach((img)=>{

        img.addEventListener("click",()=>{

            document.body.style.cursor="progress";

            setTimeout(()=>{

                document.body.style.cursor="default";

            },10);

        });

    });

}