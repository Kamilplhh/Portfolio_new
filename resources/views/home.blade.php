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
</div>

<div class="block aCw">
    <i class="fa-regular fa-x fa-xl exit"></i>
</div>
@stop