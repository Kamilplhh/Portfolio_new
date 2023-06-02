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

function displayNone() {
    $(".exit").closest("div").attr("style", "display:none !important");
}

function Set1(x,y,z) {
    $(x).toggleClass('smallH');
    $(y).toggleClass('bigH');
    $(z).toggleClass('smallW');
    $(".mid").toggleClass('smallM');
}

function Set2(x,y,z) {
    $(x).toggleClass('smallW2');
    $(y).toggleClass('smallH2');
    $(z).toggleClass('bigW');
    $(".mid").toggleClass('bigM');
}

//
//Projects
//
$(".projects").on("mouseover", Set1(".contact",".about",".services"));

$(".projects").on("mouseout", Set1(".contact",".about",".services"));

$(".projects").on("click", function () {
    toggleAnimation(".pCw",'TopL');
    $(".pCw").attr("style", "display:block !important");
    $(".bottom").attr("style", "display:none !important");
    $(".Homebuttons").attr("style", "display:block !important");
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
    $(".cCw").attr("style", "display:block !important");
    $(".bottom").attr("style", "display:none !important");
    $(".Homebuttons").attr("style", "display:block !important");
})

$("#navContact").on("click", function () {
    displayNone();
    $(".cCw").attr("style", "display:block !important"); 
    $(".cCw").addClass('animation');

    toggleAnimation(".cCw");
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
    $(".aCw").attr("style", "display:block !important");
    $(".bottom").attr("style", "display:none !important");
    $(".Homebuttons").attr("style", "display:block !important");
})

$("#navAbout").on("click", function () {
    displayNone();
    $(".aCw").attr("style", "display:block !important"); 
    $(".aCw").addClass('animation');

    toggleAnimation(".aCw");
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
    $(".sCw").attr("style", "display:block !important");
    $(".bottom").attr("style", "display:none !important");
    $(".Homebuttons").attr("style", "display:block !important");
})

$("#navServices").on("click", function () {
    displayNone();
    $(".sCw").attr("style", "display:block !important"); 
    $(".sCw").addClass('animation');

    toggleAnimation(".sCw");
})

//
//Exit
//
$(".exit").click(function () {
    $(".exit").closest("div").attr("style", "display:none !important");
    $(".bottom").attr("style", "display:block !important");
    $(".Homebuttons").attr("style", "display:none !important");
});