let slideIndex = 1;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("slider-img");
    let dots = document.querySelectorAll(".dot");
    const sliderFades = document.querySelectorAll(".slider-fade");
    
    sliderFades.forEach((fade) => {
        fade.classList.remove("slider-fade")
    })
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        slides[i].classList.add("slider-fade");
    }
    for (let index = 0; index < dots.length; index++) {
        dots[index].classList.remove("active-dot");
    }
    dots[slideIndex - 1].classList.add("active-dot");

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    
    slides[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 5000)
}

//SECTIONS CHECK
const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll(".nav-bar .nav-item-holder li");
window.onscroll = () => {
    let current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        if (scrollY >= sectionTop - 90) {
            current = section.getAttribute("id");
        }
    });


    navLi.forEach((li) => {
        li.classList.remove("active-li");
    })
    if (current == 'know-us') {
        navLi.item(0).classList.add("active-li");
    } else if (current == 'consumers') {
        navLi.item(1).classList.add("active-li");
    } else if (current == 'shopkeepers') {
        navLi.item(2).classList.add("active-li");
    } else if (current == 'investors') {
        navLi.item(3).classList.add("active-li");
    } else if(current == 'industries'){
        navLi.item(4).classList.add("active-li");
    }
    else if (current == 'who-we-are') {
        navLi.item(5).classList.add("active-li");
    } else if (current == 'contact') {
        navLi.item(6).classList.add("active-li");
    }

};


//SCROLL WRAPPER
const wrapper = document.querySelector("#consumers .wrapper");


scrollWrapper();

function scrollWrapper() {
    if(wrapper.scrollLeft >= wrapper.scrollWidth){
        wrapper.scrollLeft = 0;
    }else if (wrapper.scrollLeft < wrapper.scrollWidth) {
       setTimeout(() => {
        wrapper.scrollLeft += 4;
        scrollWrapper();
    }, 100);
    }
    // if (wrapper.scrollLeft > 0) wrapper.scrollLeft = -wrapper.scrollWidth
    
    
    
}
