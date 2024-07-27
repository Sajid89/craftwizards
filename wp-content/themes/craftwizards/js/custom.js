/*
-----------------
Author: Craft Wizards
Version: 1.0
-----------------
*/

// Add fixed class to nav after scrolling
window.addEventListener('scroll', function () {
    var mainMenu = document.getElementById('main-header');
    if (window.scrollY > 300) {
        mainMenu.classList.add('fixed');
    } else {
        mainMenu.classList.remove('fixed');
    }
});

// Tabs
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" bg-blue-500 text-white", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " bg-blue-500 text-white";
}
document.getElementById("tab1").style.display = "block";

// Swiper Slider
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Reinitialize Swiper if needed
    swiper.update();
});

