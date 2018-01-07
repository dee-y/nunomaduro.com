<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-brand-lightest font-sans font-normal">

<div class="flex flex-col">

    @include('components.navigation', [
        'links' => config('home.links')
    ])

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                @section('content')
                @show
            </div>
        </div>
    </div>
</div>
</body>
</html>
