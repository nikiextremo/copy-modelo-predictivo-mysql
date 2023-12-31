<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/android-chrome-192x192.png') }}">
        <link rel="shortcut icon" sizes="192x192" href="{{ asset('images/android-chrome-192x192.png') }}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js')}}" defer></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f2f2f2;
                background-image: url('{{ asset('images/background/bg-form.jpg') }}') !important;
            }
        </style>
        @routes
        @inertiaHead
    </head>
    <body class="antialiased">
        @inertia
        {{-- <div id="App""></div> --}}
    </body>
</html>
