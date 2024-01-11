<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="flex justify-center items-center min-h-screen">
            <div class="flex space-x-4">
                <a href="/form"  class="bg-green-400 px-4 py-8 rounded-lg text-2xl text-white font-extrabold">
                    Signing Form
                </a>
                <a href="/builder" class="bg-purple-400 px-4 py-8 rounded-lg text-2xl text-white font-extrabold">
                   Form Builder
                </a>
            </div>
        </div>
    </body>
</html>
