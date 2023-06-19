import $ from 'jquery';
window.$ = $;

function Animation(x, y) {
    $(x).toggleClass('animation' + y);
}

function toggleAnimation(x, y) {
    Animation(x, y);
    setTimeout(function () {
        Animation(x, y);
    }, 700);
}

function display(x) {
    $(x).attr("style", "display:block !important");
    $(".bottom").attr("style", "display:none !important");
    $(".Homebuttons").attr("style", "display:block !important");
}

function displayNone(x) {
    $(".exit").closest("div").attr("style", "display:none !important");

    if (typeof x !== 'undefined') {
        $(".bottom").attr("style", "display:block !important");
        $(".Homebuttons").attr("style", "display:none !important");
    }
}

function set1(x, y, z) {
    $("." + x).toggleClass('smallH');
    $("." + y).toggleClass('bigH');
    $("." + z).toggleClass('smallW');
    $(".mid").toggleClass('smallM');
}

function set2(x,y,z) {
    $("."+x).toggleClass('smallW2');
    $("."+y).toggleClass('smallH2');
    $("."+z).toggleClass('bigW');
    $(".mid").toggleClass('bigM');
}

//
//Home
//
$("#navHome").on("click", function () {
    displayNone(true);
})

//
//Projects
//
$(".projects").on("mouseover", function () {
    set1('contact', 'about', 'services');
});

$(".projects").on("mouseout", function () {
    set1('contact', 'about', 'services');
});

$(".projects").on("click", function () {
    toggleAnimation(".pCw", 'TopL');
    display(".pCw");
})

$("#navProject").on("click", function () {
    displayNone();
    toggleAnimation(".pCw", '');
    $(".pCw").attr("style", "display:block !important");
})

//
//Contact 
//
$(".contact").on("mouseover", function () {
    set2('projects', 'about', 'services');
});

$(".contact").on("mouseout", function () {
    set2('projects', 'about', 'services');
});

$(".contact").on("click", function () {
    toggleAnimation(".cCw", 'TopR');
    display(".cCw");
})

$("#navContact").on("click", function () {
    displayNone();
    toggleAnimation(".cCw", '');
    $(".cCw").attr("style", "display:block !important");
})

//
//About
//
$(".about").on("mouseover", function () {
    set2('services', 'contact', 'projects');
});

$(".about").on("mouseout", function () {
    set2('services', 'contact', 'projects');
});

$(".about").on("click", function () {
    toggleAnimation(".aCw", 'BotL');
    display(".aCw");
})

$("#navAbout").on("click", function () {
    displayNone();
    toggleAnimation(".aCw", '');
    $(".aCw").attr("style", "display:block !important");
})

//
//Services 
//
$(".services").on("mouseover", function () {
    set1('about', 'contact', 'projects');
});

$(".services").on("mouseout", function () {
    set1('about', 'contact', 'projects');
});

$(".services").on("click", function () {
    toggleAnimation(".sCw", 'BotR');
    display(".sCw");
})

$("#navServices").on("click", function () {
    displayNone();
    toggleAnimation(".sCw", '');
    $(".sCw").attr("style", "display:block !important");
})

$(".openModal").on("click", function () {
    $('.modal').attr("style", "display:none !important");
    let child = $('#modal' + event.target.id)
    $(child).attr("style", "display:block !important");
    toggleAnimation(child, 'dropDown');
})

$(".exitModal").on("click", function () {
    let parent = $('.exitModal').parent();
    toggleAnimation(parent, 'Out');
    setTimeout(function () {
        $(parent).attr("style", "display:none !important");
    }, 500);
})

//
//Exit
//
$(".exit").click(function () {
    displayNone(true)
});