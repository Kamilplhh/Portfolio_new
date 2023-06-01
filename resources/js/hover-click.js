import $ from 'jquery';
window.$ = $;

//
//
//Projects
$(".projects").on("mouseover", function () {
    $(".contact").toggleClass('smallH');
    $(".about").toggleClass('bigH');
    $(".services").toggleClass('smallW');
    $(".mid").toggleClass('smallM');
});

$(".projects").on("mouseout", function () {
    $(".contact").removeClass('smallH');
    $(".about").removeClass('bigH');
    $(".services").removeClass('smallW');
    $(".mid").removeClass('smallM');
});

$(".projects").on("click", function () {
    $(".pCw").addClass('show');
})

//
//
//Contact 
$(".contact").on("mouseover", function () {
    $(".projects").toggleClass('smallW2');
    $(".about").toggleClass('smallH2');
    $(".services").toggleClass('bigW');
    $(".mid").toggleClass('bigM');
});

$(".contact").on("mouseout", function () {
    $(".projects").removeClass('smallW2');
    $(".about").removeClass('smallH2');
    $(".services").removeClass('bigW');
    $(".mid").removeClass('bigM');
});

$(".contact").on("click", function () {
    $(".cCw").toggleClass('show');
})

//
//
//About
$(".about").on("mouseover", function () {
    $(".projects").toggleClass('bigW');
    $(".contact").toggleClass('smallH2');
    $(".services").toggleClass('smallW2');
    $(".mid").toggleClass('bigM');
});

$(".about").on("mouseout", function () {
    $(".projects").removeClass('bigW');
    $(".contact").removeClass('smallH2');
    $(".services").removeClass('smallW2');
    $(".mid").removeClass('bigM');
});

$(".about").on("click", function () {
    $(".aCw").toggleClass('show');
})

//
//
//Services 
$(".services").on("mouseover", function () {
    $(".projects").toggleClass('smallW');
    $(".contact").toggleClass('bigH');
    $(".about").toggleClass('smallH');
    $(".mid").toggleClass('smallM');
});

$(".services").on("mouseout", function () {
    $(".projects").removeClass('smallW');
    $(".contact").removeClass('bigH');
    $(".about").removeClass('smallH');
    $(".mid").toggleClass('smallM');
});

$(".services").on("click", function () {
    $(".sCw").toggleClass('show');
})