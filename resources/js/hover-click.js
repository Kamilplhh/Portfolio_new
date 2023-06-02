import $ from 'jquery';
window.$ = $;

function Animation(x, y) {
    $(x).toggleClass('animation'+ y);
}

function toggleAnimation(x,y) {
    Animation(x,y);
    setTimeout(function () {
        Animation(x,y);
    }, 700);
}

function display(x){
    $(x).attr("style", "display:block !important");
    $(".bottom").attr("style", "display:none !important");
    $(".Homebuttons").attr("style", "display:block !important");
}

function displayNone(x) {
    $(".exit").closest("div").attr("style", "display:none !important");

    if(typeof x !== 'undefined'){
        $(".bottom").attr("style", "display:block !important");
        $(".Homebuttons").attr("style", "display:none !important");
       }
}

//
//Home
//

$("#navHome").on("click", function () {
    $(".exit").closest("div").attr("style", "display:none !important");
    $(".bottom").attr("style", "display:block !important");
    $(".Homebuttons").attr("style", "display:none !important");
})

//
//Projects
//
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
    display(".pCw");
    toggleAnimation(".pCw",'TopL');
})

$("#navProject").on("click", function () {
    displayNone();
    $(".pCw").attr("style", "display:block !important"); 

    toggleAnimation(".pCw",'');
})

//
//Contact 
//
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
    toggleAnimation(".cCw",'TopR');
    display(".cCw");
})

$("#navContact").on("click", function () {
    displayNone();
    $(".cCw").attr("style", "display:block !important"); 

    toggleAnimation(".cCw",'');
})

//
//About
//
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
    toggleAnimation(".aCw",'BotL');
    display(".aCw");
})

$("#navAbout").on("click", function () {
    displayNone();
    $(".aCw").attr("style", "display:block !important"); 

    toggleAnimation(".aCw",'');
})

//
//Services 
//
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
    $(".mid").removeClass('smallM');
});

$(".services").on("click", function () {
    toggleAnimation(".sCw",'BotR');
    display(".sCw");
})

$("#navServices").on("click", function () {
    displayNone();
    $(".sCw").attr("style", "display:block !important"); 

    toggleAnimation(".sCw",'');
})

//
//Exit
//
$(".exit").click(function () {
    displayNone(true)
});