<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="main-header-inner">
                <h1 class="main-header-title"><a href="{{ route('main.main') }}" class="main-header-title-link">compa!</a></h1>
                <ul class="main-header-list">
                    <li class="main-header-item">
                        <a href="{{ route('my_page.my_page') }}" class="main-header-link">マイページ</a>
                    </li>
                    <li class="main-header-item">
                        <a href="{{ route('logout') }}" class="main-header-link">ログアウト</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main class="main-main">
        @yield('content')
    </main>
</body>
</html>
