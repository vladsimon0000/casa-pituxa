<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') }}</title>

        @include('partials.meta')
        @googlefonts

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="body bg-base-100">
        <!-- @include('cookie-consent::index') -->

        <header>
            <!-- @include('partials.transition') -->
            @include('partials.navbar')
            @include('partials.day')
            @include('partials.scroll')
        </header>

        <main>
            <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
        </main>

        <footer>
            <!-- include footer -->
        </footer>

        @filamentScripts
        @vite('resources/js/app.js')
        <!-- <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=64161360d18f1b6bc36f2ac0" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
    </body>
</html>
