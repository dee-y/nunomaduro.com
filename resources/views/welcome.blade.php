@extends('layouts.app')

@section('title', 'nunomaduro.com')

@section('content')

<section class="hero">
    <div class="grid">
        <div class="two-thirds">
            <h2>Nuno Maduro is a Master in Computer Science, Software Engineer and Web Developer.</h2>
            <p> He's <span><?php echo (date("Y") - 1990); ?></span> years old and lives in <a href="https://www.google.fr/maps/place/Paris/@48.8587741,2.2074741,11z/data=!3m1!4b1!4m2!3m1!1s0x47e66e1f06e2b70f:0x40b82c3688c9460">Paris, France</a>.</p>
            <p data-align=right>
                <a class="button" href="https://www.linkedin.com/in/nunomaduro"><i class="fa fa-linkedin"></i>Follows his career</a>
                <a class="button suggested-action green" href="https://cash.me/$nunomaduro"><i class="fa fa-usd"></i>Buy Him a Beer/Coffee/Pizza</a>
            </p>
        </div>
    </div>
</section>

<section class="grid">
    <div class="third">
        <p data-align=center><img src="images/code.svg"></p>
        <p>Laravel evangelist. PHP/SQL back-ends. HTML5/jQuery/AngularJS front-ends.</p>
        <a href="https://www.linkedin.com/in/nunomaduro" class="read-more github"><i class="fa fa-fw fa-linkedin"></i>Follows his career</a>
        <br/><a href="https://github.com/nunomaduro" class="read-more github"><i class="fa fa-fw fa-github"></i>Read his code</a>
        </p>
    </div>
    <div class="third">
        <p data-align=center><img src="images/say-things.svg"></p>
        <p>He says things on the internet about coding, football, and what he's up to.</p>
        <p><a href="https://twitter.com/enunomaduro" class="read-more twitter"><i class="fa fa-twitter"></i>Read his 140 character opinions</a>
        <br/><a href="https://plus.google.com/+NunoMaduro" class="read-more red"><i class="fa fa-google-plus"></i>Read about general stuff</a>
        </p>
    </div>
    <div class="third">
        <p data-align=center><img src="images/developer-sketch.svg" height="64" width="64"></p>
        <p>He likes blueprints and bug reports. Open source lover.</p>
        <p><a href="http://www.alumnforce.com" class="read-more twitter"><i class="fa fa-suitcase"></i>Web Developer at AlumnForce</a>
        <br/><a href="mailto:enunomaduro@gmail.com" class="read-more red"><i class="fa fa fa-envelope"></i>Start a project with him</a>
        </p>
    </div>
</section>
@endsection