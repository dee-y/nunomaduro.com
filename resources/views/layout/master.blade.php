<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="mobile-web-app-capable" content="yes">

        <title>{{ config('app.title') }}</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- @todo Check if fonts can be included using an alternative way -->
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- @todo add favicon -->



    </head>
    <body>

        @include('layout.partials.navigation')

        @include('layout.partials.header')

        @include('layout.partials.content')

        @include('layout.partials.footer')

        <!-- JavaScript -->
        <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
