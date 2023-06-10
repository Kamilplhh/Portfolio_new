@extends('layouts.master')
@section('title', '- Portfolio')


@section('content')
<div class="projects center">
    PROJECTS
</div>

<div class="contact center">
    CONTACT
</div>

<div class="about center">
    ABOUT
</div>

<a href="https://github.com/Kamilplhh/Portfolio_new" target="_blank">
    <div class="mid center">
        <span id="typed"></span>
    </div>
</a>

<div class="services center">
    SERVICES
</div>

{{-- Projects section --}}

<div class="block pCw">
    <i class="fa-regular fa-x fa-xl exit"></i>

    <div class="row projectRow">
        <div class="col-6 col-sm-4 projectGrid">
            <div class="Pshowcase"></div>
        </div>
        <div class="col-6 col-sm-4 projectGrid">
            <div class="Pshowcase"></div>
        </div>
        <div class="col-6 col-sm-4 projectGrid">
            <div class="Pshowcase"></div>
        </div>
    </div>
    <div id="next"> <i class="next">Next &raquo</i></div>
</div>

{{-- Services section --}}

<div class="block sCw">
    <i class="fa-regular fa-x fa-xl exit"></i>

    <div class="sCwContent">

    </div>
</div>

{{-- Contact section --}}

<div class="block cCw">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <i class="fa-regular fa-x fa-xl exit"></i>

    {{-- Mail form --}}

    <div class="cCwContent">
        <center>
            <h1>CONTACT</h1>
        </center>
        <div class="cCwMail">
            <form action="{{ route('send.email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-input" name="name" id="name" placeholder="NAME" required><br>
                    <input type="email" class="form-input" name="email" id="email" placeholder="EMAIL" required><br>
                    <input type="text" class="form-input" name="subject" id="subject" placeholder="SUBJECT" required><br>
                    <textarea class="text-area form-input" name="message" id="message" placeholder="MESSAGE" required></textarea>
                </div>
                <input class="form-button" type="submit" value="SEND">
            </form>
        </div>

        {{-- Contact links section --}}

        <div class="cCwContact">
            <div class="Icontact">
                <a href="https://www.linkedin.com/in/kamil-czekotas-746684277/" class="contact-icon" target="_blank"> <i class="fa-brands fa-linkedin fa-2xl"></i></a>
                <a href="https://github.com/Kamilplhh" class="contact-icon" target="_blank"> <i class="fa-brands fa-github fa-2xl"></i></a>
                <a href="https://www.instagram.com/kamil_plhh/" class="contact-icon" target="_blank"> <i class="fa-brands fa-instagram fa-2xl"></i></a>
            </div>
            <h1 class="hitMe">Hit me up</h1>
        </div>
    </div>
</div>

{{-- About section --}}

<div class="block aCw">
    <i class="fa-regular fa-x fa-xl exit"></i>

    <div class="aCwContent">
        <div class="aCwNavi">
            <h1><a href="">BIO</a></h1>
            <h1><a href="">EDUCATION</a></h1>
            <h1><a href="">JOBS</a></h1>
            <h1><a href="">REST</a></h1>
        </div>

        <div class="bio">
            <div class="profile Pic">

            </div>

            <div class="profile Info">

            </div>
        </div>

        <div class="education">

        </div>
        
        <div class="jobs">

        </div>

        <div class="rest">
            
        </div>
    </div>
</div>
@stop