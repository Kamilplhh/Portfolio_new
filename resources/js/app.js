import '../css/app.css';
import '../css/home.css';
import '../css/scaling.css';
import '../css/project.css';
import '../css/about.css';
import '../css/contact.css';
import '../css/services.css';
import '../css/homeHover.css';
import "@fortawesome/fontawesome-free/css/all.css";
import $, { error } from 'jquery';
import Typed from 'typed.js';
window.$ = $;

const typed = new Typed("#typed", {
    strings: ["DD($table)", "setInterval", "404", "Coding", "sail up", "git add .", "git status"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
})

const typed2 = new Typed("#typed2", {
    strings: ["Hello", "My name is Kamil", "Enjoy!"],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
})

const element = $('.Pshowcase');

function slider(v) {
    let reversed = JSON.parse(JSON.stringify(v)).reverse();
    $(v[0]).animate(v[1], {
        duration: 10000,
        step: function (val) {
            element.css("transform", `translateX(${val}%)`);
        },
        done: function () {
            slider(reversed)
        }
    })
};

let screenWidth = $(window).width();

if (screenWidth > 1400) {
    slider([{ x: 10 }, { x: -40 }])
}
else {
    if (screenWidth > 1000 && screenWidth <= 1400) {
        slider([{ x: 10 }, { x: -90 }])
    } else if (screenWidth > 700 && screenWidth <= 1000) {
        slider([{ x: 10 }, { x: -160 }])
    } else if (screenWidth > 400 && screenWidth <= 700) {
        slider([{ x: 20 }, { x: -500 }])
    } else {
        slider([{ x: 5 }, { x: -577 }])
    }
}

$(document).ready(function () {
    getJoke();
})

$("#jokeButton").click(function () {
    getJoke();
})

function getJoke() {
    $("#joke").text("Searching...");
    $.ajax({
        url: 'joke',
        type: 'GET',
        success: function (result) {
            $("#joke").text(result);
        },
        error: function () {
            console.log("Something didn't work")
        } 
    });
}