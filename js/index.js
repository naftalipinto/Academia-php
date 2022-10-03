const sidemenu = document.querySelector("aside");
const menubtn = document.querySelector("#menu-btn");
const closebtn = document.querySelector("#close-btn");
const theme=document.querySelector(".theme");



menubtn.addEventListener('click',() =>{
    sidemenu.style.display='block';
})

closebtn.addEventListener('click',() =>{
    sidemenu.style.display='none';
})

theme.addEventListener('click', () =>{
    document.body.classList.toggle('dark-vb');
})


/*
let tabheader= document.getElementsByClassName("tab-header")[0];
let tabindicator= document.getElementsByClassName("tab-indicator")[0];
let tabbody= document.getElementsByClassName("tab-body")[0];

let tabspane=tabheader.getElementsByTagName("div");

for(let i=0;i<tabspane.length;i++){
    tabspane[i].addEventListener("click", function(){
        tabheader.getElementsByClassName("active")[0].classList.remove("active");
        tabspane[i].classList.add("active");

        tabbody.getElementsByClassName("active")[0].classList.remove("active");
        tabbody.getElementsByTagName("div")[i].classList.add("active");
        tabindicator.style.left=` calc(calc(100% /3) * ${i})`;
    });*/
