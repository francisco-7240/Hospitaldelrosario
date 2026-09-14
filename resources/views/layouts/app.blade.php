<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')

        <title>{{ $title ?? config('app.name', 'Hospital del Rosario') }}</title>
    </head>
    <body class="min-h-screen bg-white text-dark">
        @include('partials.hospital-header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </body>
</html>