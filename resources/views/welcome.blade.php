<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans antialiased min-h-screen flex items-center justify-center dark:bg-black dark:text-white/50">
  

        
        <div>
            <a href="/dispatch">Click to dispatch 5k jobs</a>

            @if (request('done'))
                Done
            @endif

        </div>


    </body>
</html>
