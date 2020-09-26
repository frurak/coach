//----- START ----- Main baner carousel
const circleNav = document.querySelectorAll('.baner_image_nav .nav_circle');
const contBanerImg = document.querySelector('.cont_baner_image');
let contBanerImg_width = contBanerImg.getBoundingClientRect().width;
const contBanerImgWraper = document.querySelector('.cont_baner_image_wraper');

let moveSlideValue = -33.33333333;
let index = 0;

window.onload = () => {
    circleNav.forEach((circle,num) => {
        if (num === 0) {
            circle.classList.add('nav_circle-active');
        }
    });
}
const function1 = () => {
    if (index === 0) {
        contBanerImgWraper.style.transform ='translateX('+moveSlideValue*(index+1)+'%)';

        circleNav.forEach((circle,num) => {
            if (num === 0) {
                circle.classList.remove('nav_circle-active');
            } else if (num === 1) {
                circle.classList.add('nav_circle-active');
            } else {
                circle.classList.remove('nav_circle-active');
            }
        });
        index++;
        
    } else if (index == 1) {
        contBanerImgWraper.style.transform ='translateX('+moveSlideValue*(index+1)+'%)';

        circleNav.forEach((circle,num) => {
            if (num === 0) {
                circle.classList.remove('nav_circle-active');
            } else if (num === 1) {
                circle.classList.remove('nav_circle-active');
            } else {
                circle.classList.add('nav_circle-active');
            }
        });
        index++;

    } else {
        contBanerImgWraper.style.transform ='translateX('+moveSlideValue*(index-2)+'%)';

        circleNav.forEach((circle,num) => {
            if (num === 0) {
                circle.classList.add('nav_circle-active');
            } else if (num === 1) {
                circle.classList.remove('nav_circle-active');
            } else {
                circle.classList.remove('nav_circle-active');
            }
        });
        index = 0;   
    }
}

let interval = setInterval(function1, 4000);
//----- END ----- Main baner carousel

//----- START ----- Hamburger
const mobileMenu = document.querySelector('.cont_topbar_nav');
const mobileBurger = document.querySelector('.mobile_burger');
const burgerCircles = document.querySelector('.toggle_circle');
let mobileMenuCounter = 0;

mobileBurger.addEventListener('click', () => {
    if (mobileMenuCounter === 0) {
        mobileMenu.classList.add('cont_topbar_nav-active');
        mobileMenu.classList.remove('cont_topbar_nav-inactive');

        burgerCircles.classList.add('toggle_circle-active');
        burgerCircles.classList.remove('toggle_circle-inactive');
        mobileMenuCounter++;
    } else {
        mobileMenu.classList.add('cont_topbar_nav-inactive');
        mobileMenu.classList.remove('cont_topbar_nav-active');

        burgerCircles.classList.add('toggle_circle-inactive');
        burgerCircles.classList.remove('toggle_circle-active');
        mobileMenuCounter--;
    }
});
//----- END ----- Hamburger

//----- START ----- Blog Homepage Animation
const blogHomepageBox = document.querySelectorAll('.blog_section_content .content_box');
const blogHomepageImage = document.querySelectorAll('.blog_section_content .blog_1_thumbnail');

blogHomepageBox.forEach((box,index) => {
    box.addEventListener('mouseover', () => {
        blogHomepageImage[index].classList.add('thumbnail-active');
        blogHomepageImage[index].classList.remove('thumbnail-inactive');
    });
})
blogHomepageBox.forEach((box,index) => {
    box.addEventListener('mouseout', () => {
        blogHomepageImage[index].classList.add('thumbnail-inactive');
        blogHomepageImage[index].classList.remove('thumbnail-active');
    });
})
//----- END ----- Blog Homepage Animation
