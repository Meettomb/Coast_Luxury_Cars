function sideNav() {
document.getElementById("sidenavbar").style.width = "100%";
//   document.getElementById("Xnavdiv").style.width = "100vw";
}

function closeNavbar() {
    document.getElementById("sidenavbar").style.width = "0";
//   document.getElementById("Xnavdiv").style.width = "0";
}

// ===================================== ADMIN SIDE NAV ===================================================

function sideNav1() {
        document.getElementById("sidenavbar").style.width = "15%";
        document.getElementById("Xnavdiv").style.width = "5%";
    }
    
    function closeNavbar1() {
        document.getElementById("sidenavbar").style.width = "0";
        document.getElementById("Xnavdiv").style.width = "0";
    }

// ===================================== SOCIAL LINKS =====================================
function openinsta()
{
    window.open("https://www.instagram.com/meet_299_299/")
    document.getElementById(compiler).style.display="block";
}

function openfecbook()
{
    window.open("https://www.facebook.com/profile.php?id=100053871495084")
    document.getElementById(compiler).style.display="block";
}

function openx()
{
    window.open("https://twitter.com/Pat09427193Meet")
    document.getElementById(compiler).style.display="block";
}

// =================================================== Animation =======================================

    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 15;

            if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
            } else {
            reveals[i].classList.remove("active");
            }
        }
    }    
    window.addEventListener("scroll", reveal);

function reveal2() {
    var reveals = document.querySelectorAll(".reveal2");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 100;

        if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
        } else {
        reveals[i].classList.remove("active");
        }
    }
}
window.addEventListener("scroll", reveal2);


    function reveal3() {
        var reveals = document.querySelectorAll(".reveal3");
    
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 0;
    
            if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
            } else {
            reveals[i].classList.remove("active");
            }
        }
    }
    window.addEventListener("scroll", reveal3);

function reveal4() {
    var reveals = document.querySelectorAll(".reveal4");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 0;

        if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
        } else {
        reveals[i].classList.remove("active");
        }
    }
}
window.addEventListener("scroll", reveal4);

    
// =======================================================================================

// ====================================================================================================


$(document).ready(function() {
    $menuLeft = $('.pushmenu-left');
    $nav_list = $('#nav_list');
    
    $nav_list.click(function() {
        $(this).toggleClass('active');
        $('.pushmenu-push').toggleClass('pushmenu-push-toright');
        $menuLeft.toggleClass('pushmenu-open');
    });
});

// =============================================== Image Show ======================================

function displayImage1() {
    var input = document.getElementById('imageInput1');
    var image = document.getElementById('selectedImage1');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image.src = e.target.result;
            image.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function displayImage2() {
    var input = document.getElementById('imageInput2');
    var image = document.getElementById('selectedImage2');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image.src = e.target.result;
            image.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function displayImage3() {
    var input = document.getElementById('imageInput3');
    var image = document.getElementById('selectedImage3');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image.src = e.target.result;
            image.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
}