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
            <div class="is-sp menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="main-header-list my-page-header-list">
                <li class="main-header-item">
                    <a href="{{ route('main.main') }}" class="main-header-link">ホームに戻る</a>
                </li>
                <li class="main-header-item">
                    <a href="{{ route('logout') }}" class="main-header-link">ログアウト</a>
                </li>
                <li class="main-header-item">
                    <a href="" class="main-header-link do-account-delete" id="do-account-delete">アカウントを削除</a>
                </li>
            </ul>
            <div class="is-sp slide-menu">
                <div class="slide-menu-inner">
                    <ul class="slide-menu-list">
                        <li class="slide-menu-item">
                            <a href="{{ route('main.main') }}" class="slide-menu-link">ホームに戻る</a>
                        </li>
                        <li class="slide-menu-item">
                            <a href="{{ route('logout') }}" class="slide-menu-link">ログアウト</a>
                        </li>
                        <li class="slide-menu-item">
                            <a href="" class="slide-menu-link" id="do-account-delete-sp">アカウントを削除</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="is-sp slide-menu-down"></div>
        </div>
    </div>
</header>
<div class="my_page_header">
    <div class="container">
        <div class="my_page_header_contents">
            <div class="my_page_head">
                <img src="{{ asset($user->profile_img) }}" alt="{{ $user->name }}" class="my_img">
            </div>
            <div class="my_page_body">
                <div class="my_contents_item">
                    <p class="my_contents_text my_name_text">{{ $user->name }}</p>
                </div>
                <div class="my_contents_item">
                    <p class="my_contents_text my_email_text">{{ $user->email }}</p>
                </div>
                <div class="my_contents_item">
                    <p class="my_contents_text my_number_people_text">参加人数：{{ $user->number_people }}</p>
                </div>
            </div>
            <div class="preview-link-wrap">
                <a href="{{ route('main.show', ['id' => Auth::id()]) }}" class="preview-link main-header-link">投稿プレビューをみる</a>
            </div>
            <div class="my_page_edit">
                <a href="{{ route('my_page.edit') }}" class="my_page_edit_link btn btn-primary">プロフィールを編集する</a>
            </div>
        </div>
    </div>
    
    <div class="my_page_header_nav">
        <form action="{{ route('my_page.my_page') }}" method="GET">
            <ul class="my_header_nav_list">
                <li class="my_header_nav_item @if ($request['users'] == '0' || $request['users'] === null) selected @endif">
                    <button class="my_header_nav_link" type="submit" name="users" value="0">いいね</button>
                </li>
                <li class="my_header_nav_item @if ($request['users'] == '1') selected @endif">
                    <button class="my_header_nav_link" type="submit" name="users" value="1">いいねされました</button>
                </li>
                <li class="my_header_nav_item @if ($request['users'] == '2') selected @endif">
                    <button class="my_header_nav_link" type="submit" name="users" value="2">マッチ</button>
                </li>
            </ul>
        </form>
    </div>


    <main class="main-main">
        @foreach ($users as $user)
        <article class="participant @if ($user->gender === 0) man @endif">
            <p class="participant-name @if ($user->gender === 0) man @endif">{{ $user->name }} （{{ $check->checkAge($user->age) }}）</p>
            @if ($user->id !== Auth::user()->id)
            @if ($all_user::find(Auth::id())->isFavoriting($user->id))
            <form class="favorite_form" action="{{ route('main.favorite', ['id' => $user->id]) }}" method="POST" data-id="{{ $user->id }}">
            {{ csrf_field() }}

                <button type="submit" class="do_favorite"></button>
            </form>
            @else
            <form class="favorite_form" action="{{ route('main.favorite', ['id' => $user->id]) }}" method="POST" data-id="{{ $user->id }}">
            {{ csrf_field() }}

                <button type="submit" class="favorite"></button>
            </form>
            @endif
            @endif
            <a href="{{ route('main.show', ['id' => $user->id ]) }}" class="participant-link">
                <div class="participant-head">
                    <div class="participant-img-wrapper">
                        <img class="participant-img" src="{{ asset($user->profile_img) }}" alt="">
                    </div>
                    <div class="participant-tags">
                        @if ($user->tag_1 !== null)
                        <p class="tag-content @if ($user->gender === 0) man @endif">{{ $check->checkTag_1($user->tag_1) }}</p>
                        @endif
                        @if ($user->tag_2 !== null)
                        <p class="tag-content @if ($user->gender === 0) man @endif">{{ $check->checkTag_2($user->tag_2) }}</p>
                        @endif
                        @if ($user->tag_3 !== null)
                        <p class="tag-content @if ($user->gender === 0) man @endif">{{ $check->checkTag_3($user->tag_3) }}</p>
                        @endif
                    </div>
                </div>
                <div class="participant-body">
                    <div class="participant-contents">
                        <dl class="participant-contents-list">
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($user->gender === 0) man @endif">
                                    <p>参加人数</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $user->number_people }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($user->gender === 0) man @endif">
                                    <p>希望場所</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $check->checkLocation($user->location) }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($user->gender === 0) man @endif">
                                    <p>希望曜日</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $user->day }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($user->gender === 0) man @endif">
                                    <p>職業</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $user->job }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($user->gender === 0) man @endif">
                                    <p>趣味</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $user->hobby }}</p>
                                </dd>
                            </div>
                        </dl>
                    </div>
                    @if ($user->pr_comment !== null)
                    <div class="participant-pr @if ($user->gender === 0) man @endif">
                        <p class="participant-pr-text">{{ $user->pr_comment }}</p>
                    </div>
                    @endif
                </div>
            </a>
        </article>
        @endforeach
    </main>

    <div class="account-delete-page">
        <div class="account-delete-contents">
            <p class="account-delete-attention">本当にアカウントを削除しますか？<br><span>※一度削除すると復元できなくなります</span></span>
            <div class="account-delete-submit-wrap">
                <form action="{{ route('my_page.delete', ['id' => Auth::id()]) }}" method="POST">
                    @csrf
                    <button class="account-delete-submit main-header-link">削除する</button>
                </form>
                <a href="" class="account-delete-cancel main-header-link">削除しない</a>
            </div>
            
        </div>
    </div>
    <script type="module">

    $(function() {

    $('.favorite').on('click', function() { 
        
        event.preventDefault();
        var $this = $(this);
        var $form = $this.parents('form:first');
        var $form_id = $form.data('id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $form.attr('action'),
            type: $form.attr('method'),
            data: {'id': $form_id, '_method': 'POST'}
        })
        // Ajaxリクエストが成功した場合
        .done(function(data) {
            $this.toggleClass('do_favorite');
            $this.toggleClass('favorite');
        })
        // Ajaxリクエストが失敗した場合
        .fail(function(data) {
            alert ('失敗');
        });
    });

    $('.do_favorite').on('click', function() { 
        event.preventDefault();
        var $this = $(this);
        var $form = $this.parents('form:first');
        var $form_id = $form.data('id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $form.attr('action'),
            type: $form.attr('method'),
            data: {'id': $form_id, '_method': 'POST'}
        })
        // Ajaxリクエストが成功した場合
        .done(function(data) {
            $this.toggleClass('favorite');
            $this.toggleClass('do_favorite');
        })
        // Ajaxリクエストが失敗した場合
        .fail(function(data) {
            alert ('失敗');
        });
    });
    });
    </script>
</body>
</html>