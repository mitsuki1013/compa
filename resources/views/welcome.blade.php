<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>compa!</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- css -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    </head>
    <body class="welcome-body">
        <header class="welcome-header">
            <div class="welcome_header_inner">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ route('main.main') }}" class="welcome-header-link welcome">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="welcome-header-link welcome">ログインする</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="welcome-header-link welcome">新規会員登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </header>
        <main class="welcome-main">
            <div class="welcome-title-wrap">
                <h1 class="welcome-title util-main-title welcome">compa!</h1>
                <p class="welcome-sub-text">ー合コンができるマッチングアプリー</p>
            </div>
        </main>
    </body>
</html>
