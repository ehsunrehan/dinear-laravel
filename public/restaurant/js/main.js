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


/* Close sidebar after menu click (mobile) */

document.querySelectorAll(".sidebar-menu a").forEach(item=>{

item.addEventListener("click",()=>{

if(window.innerWidth<=992){

closeSidebar();

}

});

});




/* ==========================================
PROFILE DROPDOWN
========================================== */

const profileBtn=document.getElementById("profileBtn");
const profileMenu=document.getElementById("profileMenu");

if(profileBtn){

profileBtn.addEventListener("click",(e)=>{

e.stopPropagation();

profileMenu.classList.toggle("show");

});

document.addEventListener("click",()=>{

profileMenu.classList.remove("show");

});

}



/* ===================================
COUNT UP ANIMATION
=================================== */

document.querySelectorAll(".dashboard-card h2").forEach(card=>{

let text=card.innerText;

let target=parseInt(text.replace(/\D/g,''))||0;

if(target===0)return;

let current=0;

let speed=Math.ceil(target/40);

let prefix=text.replace(/[0-9]/g,'');

let interval=setInterval(()=>{

current+=speed;

if(current>=target){

current=target;

clearInterval(interval);

}

card.innerText=prefix+current;

},25);

});