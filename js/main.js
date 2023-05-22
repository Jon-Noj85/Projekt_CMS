"use-strict";
/*
Källa: https://codepen.io/Nathan-Callum-Marshall/pen/oqMrKp
*/
$(".burger-menu ").on("click", ".bar", function () {

    $(".main-nav").slideToggle();
    $(".bar").toggleClass('change');
    $(".main-nav li").slideDown();

});

/* Variabler för att hamburgar-ikon samt nav-länkar */
let barEl = document.querySelector(".bar");
let navEl = document.querySelector(".main-nav");


/* Funktion som ser till att menyn håller sig öppen/stängd då man ändrar storlek på viewport */
let onresize = function (e) {

    let width = window.innerWidth;
    if (width >= 1200) {
        navEl.style.display = "block";

    } else {
        if (barEl.classList.contains("change")) {
            navEl.style.display = "block";
        } else {
            navEl.style.display = "none";
        }

    }
}

/* Händelselyssnar då viewport ändrar storlek */
window.addEventListener("resize", onresize);

//JQuery används för att göra en hett helt div-element klickbart, länk hittas inom den. hämtad från http://web-profile.net/jquery/dev/jquery-entire-div-clickable/

jQuery(function ($) { // wait while jQuery loads (document-ready)
    $('.category-item').click(function () { // open the link if user clicked anywhere on block 
        var link_url = $(this).find('a').attr('href');
        var target_attr = $(this).find('a').attr('target');
        if (target_attr == '_blank') {
            window.open(link_url);

            console.log("hej");
        } else {
            window.location.href = link_url;
        }
    });
});
  
