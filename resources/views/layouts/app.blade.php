<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>@yield('title')</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <meta name="author" content="Nuno Maduro">
        <meta name="theme-color" content="#3892E0">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@enunomaduro">
        <meta name="twitter:creator" content="@enunomaduro">

        <meta property="og:title" content="nunomaduro.com">
        <meta property="og:description" content="The personal site for Nuno Maduro">
        <meta property="og:image" content="http://nunomaduro.com/images/preview.png">
        <meta name="p:domain_verify" content="8fdfe8f6e3df8cc3fc98022fc46ebb1b"/>

        <link rel="stylesheet" type="text/css" media="all" href="css/app.css">
        <script type="text/javascript" src="js/app.js"></script>
    </head>
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="/" class="signature">Nuno Maduro</a>
                </li>
            </ul>

            <ul class="right">
                <li>
                    <a href="https://twitter.com/enunomaduro"target="_blank">
                        <i class="fa fa-fw fa-twitter fa-lg"></i>
                    </a>
                </li>
                <li>
                    <a href="mailto:enunomaduro@gmail.com">
                        <i class="fa fa-fw fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>

        <footer>
            <p>© <span id="year"><?php echo date("Y"); ?></span> Nuno Maduro. Made in Paris, France.</p>
            <ul>
                <li class="animated black">
                    <a href="https://github.com/nunomaduro" class="tooltip" data-tooltip="GitHub">
                        <i class="fa fa-github fa-lg"></i>
                    </a>
                </li>
                <li class="animated red">
                    <a href="https://plus.google.com/+NunoMaduro" class="tooltip" data-tooltip="Google+">
                        <i class="fa fa-google-plus fa-lg"></i>
                    </a>
                </li>
                <li class="animated blue-twitter">
                    <a href="https://twitter.com/enunomaduro" class="tooltip" data-tooltip="Twitter">
                        <i class="fa fa-twitter fa-lg"></i>
                    </a>
                </li>
                <li class="animated blue-linkedin">
                    <a href="https://www.linkedin.com/in/nunomaduro" class="tooltip" data-tooltip="Linkedin">
                        <i class="fa fa-linkedin fa-lg"></i>
                    </a>
                </li>
                <li class="animated yellow">
                    <a href="mailto:enunomaduro@gmail.com" class="tooltip" data-tooltip="Email">
                        <i class="fa fa-envelope fa-lg"></i>
                    </a>
                </li>
                <li class="animated green">
                    <a href="https://cash.me/$nunomaduro" class="tooltip" data-tooltip="Cash Me">
                        <i class="fa fa-usd fa-lg"></i>
                    </a>
                </li>
            </ul>

            <p>Inspired by <a href="http://danielfore.com" target="_blank">Daniel Foré</a>.</p>
        </footer>
    </body>
</html>