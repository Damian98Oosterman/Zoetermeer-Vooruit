<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<!-- Messrs David Mesman, Robin Kuijpers, Martijn van Halderen & Ted van Riel Proudly present Zoetermeer-Vooruit's new website. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    <div id="app">
        @include('partials.nav')
        @yield('nav')
        @yield('content')
    </div>



@include('partials.footer')

</body>
    <!-- Scripts -->
    <script src="{{ asset('bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
