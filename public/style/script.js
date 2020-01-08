window.addEventListener("load", function(){
    const loader = document.querySelector(".loader");
    loader.className += " hidden"
})

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.querySelector(".navsbar").style.top = "0";
        } 
        else {
            document.querySelector(".navsbar").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
    }

let hem = document.querySelector(".header .ham-bar .ham");
let tempat = document.querySelector(".navsbar");
let hambar=document.querySelector('.ham-bar');
let logo = document.querySelector('.logo');


hem.addEventListener('click',function(){
    tempat.classList.toggle('navsbar');
    logo.style.display='none';
    tempat.style.height='100vh';
});

let faq = document.querySelectorAll(".faq-title");
    for (let i = 0; i < faq.length; i++){
        faq[i].onclick = function (){
        let content = this.nextElementSibling; // membaca object dari button 
        this.classList.toggle('is-open'); // untuk membaca faq yg aktiv
            if(content.style.maxHeight){
                // menutup faq
                content.style.maxHeight = null;
            } 
            else{
                // membuka faq
                content.style.maxHeight = content.scrollHeight + "px";
            }
        }
    }