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

<div class="block sCw">
    <i class="fa-regular fa-x fa-xl exit"></i>
</div>

<div class="block cCw">
    <i class="fa-regular fa-x fa-xl exit"></i>
    <div class="cCwContent">
        <center>
            <h1>CONTACT</h1>
        </center>
        <div class="cCwMail">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('send.email') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="name" placeholder="NAME" required><br>
                    <input type="email" name="email" id="email" placeholder="EMAIL" required><br>
                    <input type="text" name="subject" id="subject" placeholder="SUBJECT" required>
                    <textarea class="form-control" name="message" id="message" placeholder="MESSAGE" required></textarea>
                </div>
                <input type="submit" value="Send Message">
            </form>
        </div>

        <div class="cCwContact">
            <div class="Icontact">

            </div>
            <h1 class="hitMe">Hit me up</h1>
        </div>
    </div>
</div>

<div class="block aCw">
    <i class="fa-regular fa-x fa-xl exit"></i>
</div>
@stop