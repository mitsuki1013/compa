@extends('layouts.app_main')

@section('content')

<div class="main-contents">
    <div class="main-contents-container">
        <ul class="participant-list">
            <li class="participant-item">
                <article class="participant check">
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
                    <div class="participant-link">
                        <div class="participant-head">
                            <div class="participant-img-wrapper">
                                <img class="participant-img show-profile-img" src="{{ asset($user->profile_img) }}" alt="">
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
                                            <p>性別</p>
                                        </dt>
                                        <dd class="participant-contents-body">
                                            <p>{{ $check->checkGender($user->gender) }}</p>
                                        </dd>
                                    </div>
                                    <div class="participant-contents-item">
                                        <dt class="participant-contents-head @if ($user->gender === 0) man @endif">
                                            <p>人数</p>
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
                                    <div class="participant-contents-item">
                                        <dt class="participant-contents-head @if ($user->gender === 0) man @endif">
                                            <p>お煙草</p>
                                        </dt>
                                        <dd class="participant-contents-body">
                                            <p>{{ $check->checkSmoking($user->smoking) }}</p>
                                        </dd>
                                    </div>
                                    <div class="participant-contents-item">
                                        <dt class="participant-contents-head @if ($user->gender === 0) man @endif">
                                            <p>お酒の頻度</p>
                                        </dt>
                                        <dd class="participant-contents-body">
                                            <p>{{ $check->checkSake($user->sake) }}</p>
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
                    </div>
                </article>
                @if ($all_user::find(Auth::id())->isFavoriting($user->id) && $all_user::find(Auth::id())->isFavorited($user->id))
                <div class="chat_start_btn">
                    <form action="{{ route('chat.chat', ['id' => $user->id]) }}" method="GET">
                    @csrf
                        <div class="chat-btn-wrap">
                            <button type="submit" class="btn btn-primary chat-btn">チャットを始める</button>
                        </div>
                    </form>
                </div>
                @endif
            </li>
        </ul>
    </div>
</div>
<div class="modal">
    <div class="bigImg"><img src="" alt=""></div>
    <p class="close-btn"><a href="">✖</a></p>
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
            alert ('お気に入りに失敗しました');
        });
    });
});



</script>
    
@endsection












