import '../css/app.css';
import '../css/home.css';
import '../css/scaling.css';
import '../css/project.css';
import '../css/about.css';
import '../css/contact.css';
import '../css/services.css';
import '../css/homeHover.css';
import "@fortawesome/fontawesome-free/css/all.css";
import $ from 'jquery';
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