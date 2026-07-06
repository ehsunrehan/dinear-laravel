const menuToggle = document.getElementById("menu-toggle");

const sidebar = document.querySelector(".sidebar");

const overlay = document.getElementById("sidebar-overlay");

function closeSidebar(){

    sidebar.classList.remove("active");

    overlay.classList.remove("active");

    document.body.style.overflow="auto";

}

if(menuToggle){

    menuToggle.addEventListener("click",()=>{

        sidebar.classList.add("active");

        overlay.classList.add("active");

        document.body.style.overflow="hidden";

    });

}

overlay.addEventListener("click",closeSidebar);

document.addEventListener("keydown",(e)=>{

    if(e.key==="Escape"){

        closeSidebar();

    }

});