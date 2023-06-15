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
    <div class="projectRow">
        @foreach($projects as $project)
        <a class="Pshowcase" href="{{ $project->url }}" target="_blank">
            <div class="pBG" style="background-image: url({{ url('images/'.$project->src) }});">
                <div class="showProject">
                    <center>
                        <h3>{{ $project->name }} <br></h3>      
                        Technologies used:
                    </center>
                    <div class="technologies">
                        @for ($i = 0; $i <= 6; $i++) 
                            <?php $src = 'src' . $i; ?> 
                            {{ $project->technology->$src }} 
                        @endfor 
                    </div>

                    </div>
                </div>
        </a>
        @endforeach
    </div>
</div>

{{-- Services section --}}

<div class="block sCw">
    <i class="fa-regular fa-x fa-xl exit"></i>

    <div class="sCwContent">
        <div class="sCwBlock">

        </div>
        <div class="sCwBlock servRight">

        </div>
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
            <h1><a href="#bio">BIO</a></h1>
            <h1><a href="#education">EDUCATION</a></h1>
            <h1><a href="#jobs">JOBS</a></h1>
            <h1><a href="#skills">SKILLS</a></h1>
        </div>

        <div id="bio">
            <div class="profile Pic">
                <img src='images/test.jpg' alt="" class="pfp">
            </div>
            <div class="profile Info">
                <div class="pfInfo">
                    <span id="typed2" class="headline"></span>
                    <h2>I'm 23 years old digital solutions developer, right now I'm into:
                        <ul>
                            <li><i class="fa-solid fa-computer"></i> Programming and a whole computer science stuff</li>
                            <li><i class="fa-solid fa-volleyball"></i> Sport of any kind</li>
                            <li><i class="fa-solid fa-music"></i> Music</li>
                            <li><i class="fa-solid fa-user-astronaut"></i> Astronomy</li>
                            <li><i class="fa-solid fa-gamepad"></i> Games</li>
                        </ul>
                    </h2>
                </div>
            </div>
        </div>

        <div id="education">
            <div class="eduInfo">
                <ul>
                    @foreach($educations as $education)
                    <li>{{ $education->description }}<br>
                        {{ $education->started }} - {{ $education->ended }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="jobs">
            <div class="eduInfo">
                <ul>
                    @foreach($jobs as $job)
                    <li>
                        {{ $job->description }}<br>
                        {{ $job->started }} - {{ $job->ended }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="skills">
            <div class="eduInfo">
                <ul>
                    @foreach($skills as $skill)
                    <li>
                        {{ $skill->description }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@stop