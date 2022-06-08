<!DOCTYPE html>
<html class="scroll-smooth" lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#05d53b">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @stack('custom-css')
    {!! SEO::generate(true) !!}
</head>

<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="{{asset('js/app.min.js')}}"></script>
</body>

</html>