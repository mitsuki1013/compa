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
</head>
<body>
    <header class="main-header">
        <div class="container chat-container">
            <div class="main-header-inner">
                <h1 class="main-header-title"><a href="{{ route('main.main') }}" class="main-header-title-link">compa!</a></h1>
            </div>
            <div class="chat-nav">
                <a href="{{ route('main.show', ['id' => $other_id->id]) }}" class="chat-nav-link main-header-link">戻る</a>
            </div>
        </div>
    </header>

    <main class="chat-form">
        <div class="chat-content">
            <div class="card">
                <div class="card-header">
                    <p class="chat-other-name">{{ $other_id->name }}</p>
                </div>
                <div class="card-body chat-card-body">
                    <div class="blockquote">
                        
                    </div>
                </div>
            </div>
            <div class="chat-submit-content">
                <form class="form-block chat-submit-form container" action="{{ route('chat.chat_store', ['id' => $other_id->id]) }}" method="POST" data-id="{{ $other_id->id }}">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="input-group col-12">
                            <input type="text" class="form-control" placeholder="" name="chat_message" maxlength='255'>
                            <button type="submit" class="btn btn-outline-primary chat-post-submit"
                            @if (empty($all_user::find(Auth::id())->isFavoriting($other_id->id)) || empty($all_user::find(Auth::id())->isFavorited($other_id->id))) disabled @endif disabled>
                            送信
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </main>
    <script type="module">

    $(function() {

        // チャットテキストの保存
        // ChatController@chatStore
        $('.chat-post-submit').on('click', function() { 
            
            event.preventDefault();
            var $this = $(this);
            var $form = $this.parents('form:first');
            var $form_id = $form.data('id');
            var $value = $("input[name='chat_message']").val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: $form.attr('action'),
                type: $form.attr('method'),
                data: {
                'id': $form_id,
                'chat_message': $value,
                '_method': 'POST'
                }
            })
            // Ajaxリクエストが成功した場合
            // input['text']内のメッセージを空にする
            .done(function(data) {
                $("input[name='chat_message']").val('');
            })
            // Ajaxリクエストが失敗した場合
            .fail(function(data) {
                alert('メッセージの送信に失敗しました');
            });
        });

        
        // route('chat.result')で取得したチャットメッセージの内容と、送信者の情報をjsonデータとして取得し、
        // 3秒おきにここで取得している
        function get_data() {
            $.ajax({
                url: "{{ route('chat.result', ['id' => $other_id->id]) }}",
                dataType: "json",
                success: data => {
                    $(".blockquote")
                    .find(".chat-visible")
                    .remove();
                    for (var i = 0; i < data.chat_messages.length; i++) {
                        var html = 
                        `
                        <div class="chat-visible data${data.chat_messages[i].user_id}" data-id="${data.chat_messages[i].user_id}">
                            <div class="chat-contents-flex data${data.chat_messages[i].user_id}" data-id="${data.chat_messages[i].user_id}">
                                <div class="chat-message-head">
                                    <div class="chat-message-img">
                                        <img src='{{asset('${data.chat_messages[i].users[0].profile_img}')}}' alt="${data.chat_messages[i].users[0].name}">
                                    </div>
                                </div>
                                <div class="chat-message-body card">
                                    <div class="chat-message-content">
                                        ${data.chat_messages[i].chat_message}
                                    </div>
                                </div>
                            </div>
                            <div class="chat-message-time">
                                <time>${data.chat_messages[i].created_at}</time>
                            </div>
                        </div>
                        
                        `;
                        $(".blockquote").append(html);
                    }
                    $('.data{{Auth::id()}}').addClass('mine-message');
                },
                error: () => {
                    alert('受信に失敗しました');
                }
            });
        }
        get_data(); 
        setInterval(function(){
            get_data() 
        },  3000); //3秒おきにデータを取得
        
    });
    </script>
</body>
</html>