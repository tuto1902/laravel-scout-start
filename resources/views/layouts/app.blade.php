<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Scout</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto px-4">
            
            <div class="my-8">
                {{ $header }}
            </div>

            {{ $slot }}
        </div>
    </body>
</html>
