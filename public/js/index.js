let slideIndex = 1;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slider-img");
    const sliderFades = document.querySelectorAll(".slider-fade");
    sliderFades.forEach((fade) => {
        fade.classList.remove("slider-fade")
    })
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        slides[i].classList.add("slider-fade");
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    
    setTimeout(showSlides, 6000)
}

//SECTIONS CHECK
const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll(".nav-bar .nav-item-holder li");
window.onscroll = () => {
    var current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (scrollY >= sectionTop - 60) {
            current = section.getAttribute("id");
            console.log(current)
        }
    });
    
    
    navLi.forEach((li) => {
        li.classList.remove("active-li");
    })
    if(current == 'know-us'){
        navLi.item(0).classList.add("active-li");
    }else if (current == 'consumers'){
        navLi.item(1).classList.add("active-li");
    }


    
};