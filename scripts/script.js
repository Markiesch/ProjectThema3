//variable aanmaken
var hamburger = document.getElementById("hamburger");
var slideMenu = document.getElementById("slideMenu");
var menuTriangle = document.getElementById("slideMenuTriangle");

//toggle menu
function toggleMenu() {
    if (slideMenu.className == "menuClosed") {
        slideMenu.className = "menuOpen";
        hamburger.className = "closeMenu";
        menuTriangle.style.opacity = 1;
    } else {
        slideMenu.className = "menuClosed";
        hamburger.classList.remove("closeMenu");
        menuTriangle.style.opacity = 0;
    }
}

document.querySelector("main").addEventListener("click", closeMenu);
function closeMenu() {
    slideMenu.className = "menuClosed";
    hamburger.classList.remove("closeMenu");
    menuTriangle.style.opacity = 0;
}

//submenu's openen
var sub1 = document.getElementById("sub1");
var sub2 = document.getElementById("sub2");
var sub3 = document.getElementById("sub3");
var sub4 = document.getElementById("sub4");

sub1.addEventListener("click", openSub1);
sub2.addEventListener("click", openSub2);
sub3.addEventListener("click", openSub3);
sub4.addEventListener("click", openSub4);

function openSub1() {
    if (document.querySelector("#sub1 > .submenu").style.display == "block") {
        document.querySelector("#sub1 > .submenu").style.display = "none";
    } else {
        document.querySelector("#sub1 > .submenu").style.display = "block";
    }
}
function openSub2() {
    if (document.querySelector("#sub2 > .submenu").style.display == "block") {
        document.querySelector("#sub2 > .submenu").style.display = "none";
    } else {
        document.querySelector("#sub2 > .submenu").style.display = "block";
    }
}
function openSub3() {
    if (document.querySelector("#sub3 > .submenu").style.display == "block") {
        document.querySelector("#sub3 > .submenu").style.display = "none";
    } else {
        document.querySelector("#sub3 > .submenu").style.display = "block";
    }
}
function openSub4() {
    if (document.querySelector("#sub4 > .submenu").style.display == "block") {
        document.querySelector("#sub4 > .submenu").style.display = "none";
    } else {
        document.querySelector("#sub4 > .submenu").style.display = "block";
    }
}
