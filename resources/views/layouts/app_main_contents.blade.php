@extends('layouts.app_main')

@section('content')

<!----------
地域選択
----------->
<div class="main-location-select">
    <div class="container">
        <p class="main-select-top-title">地域選択</p>
        <div class="select-list-wrapper">
            <form class="location-select-form" method="GET" action="@yield('route')">
                @yield('location-select-item')
                <!-- 地域変更の際に、検索条件を保持したままであるための記述 -->
                <input type="hidden" name="gender" value="{{ $data['gender'] }}">
                <input type="hidden" name="hobby" value="{{ $data['hobby'] }}">
                <input type="hidden" name="job" value="{{ $data['job'] }}">
                <input type="hidden" name="smoking" value="{{ $data['smoking'] }}">
                <input type="hidden" name="number_people" value="{{ $data['number_people'] }}">
                <!-- htmlspecialChars内は文字列であり、配列は入れることができないので、foreachで処理 -->
                @if (!empty($data['days']))
                @foreach ($data['days'] as $day)
                <input type="hidden" name="day[]" value="{{ $day }}">
                @endforeach
                @endif
                <input type="hidden" name="sake" value="{{ $data['sake'] }}">
                <input type="hidden" name="tag_1" value="{{ $data['tag_1'] }}">
                <input type="hidden" name="tag_2" value="{{ $data['tag_2'] }}">
                <input type="hidden" name="tag_3" value="{{ $data['tag_3'] }}">
            </form>
        </div>
    </div>
</div>

<!-----------
詳細条件設定
------------>
<div class="main-location-select">
    <button class="main-select-search-title">条件から絞る</button>
    <!-- scssはprofile.scss参照 -->
    <div class="profile-form select-form">
        <div class="container row d-flex justify-content-center">
            <form class="col-md-6" method="GET" action="@yield('route')">
                <dl class="profile-list">
                    <div class="form-group profile-item">
                        <dt class="profile-head">
                            <label for="hobby">趣味</label>
                        </dt>
                        <dd class="profile-body">
                            <input name="hobby" type='text' class="form-control" id="hobby" rows="3" value="{{ $data['hobby'] }}">
                        </dd>
                    </div>
                    <div class="form-group profile-item">
                        <dt class="profile-head">
                            <label for="job">職業</label>
                        </dt>
                        <dd class="profile-body">
                            <input name="job" type='text' class="form-control" id="job" rows="3" value="{{ $data['job'] }}">
                        </dd>
                    </div>
                    <div class="profile-item">
                        <dt class="profile-head">
                            <p>お煙草</p>
                        </dt>
                        <dd class="profile-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="smoking" id="smoking0" value="0" @if($data['smoking'] === '0') checked @endif>
                                <label class="form-check-label" for="smoking0">
                                    吸う
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="smoking" id="smoking1" value="1" @if($data['smoking'] === '1') checked @endif>
                                <label class="form-check-label" for="smoking1">
                                    吸わない
                                </label>
                            </div>
                        </dd>
                    </div>
                    <div class="form-group profile-item">
                        <dt class="profile-head">
                            <label for="number_people">人数</label>
                        </dt>
                        <dd class="profile-body">
                            <div class="number-people-wrapper d-flex">
                                <select name="number_people" class="form-control" id="number_people">
                                    <option value="" selected>選択してください</option>
                                    <option value="1" @if($data['number_people'] === '1') selected @endif>1名</option>
                                    <option value="2" @if($data['number_people'] === '2') selected @endif>2名</option>
                                    <option value="3" @if($data['number_people'] === '3') selected @endif>3名</option>
                                    <option value="4" @if($data['number_people'] === '4') selected @endif>4名</option>
                                    <option value="5" @if($data['number_people'] === '5') selected @endif>5名</option>
                                    <option value="6" @if($data['number_people'] === '6') selected @endif>6名</option>
                                    <option value="7" @if($data['number_people'] === '7') selected @endif>7名</option>
                                    <option value="8" @if($data['number_people'] === '8') selected @endif>8名</option>
                                    <option value="9" @if($data['number_people'] === '9') selected @endif>9名</option>
                                    <option value="10" @if($data['number_people'] === '10') selected @endif>10名</option>
                                    <option value="11" @if($data['number_people'] === '11') selected @endif>10名以上</option>
                                </select>
                            </div>
                        </dd>
                    </div>
                    <div class="profile-item">
                        <dt class="profile-head">
                            <p>希望曜日</p>
                        </dt>
                        <dd class="profile-body">
                            <div class="form-check form-check-inline">
                                <input name="day[]" class="form-check-input" type="checkbox" id="day1" value="日" @if(!empty($data['days']) && in_array('日', $data['days'])) checked @endif>
                                <label class="form-check-label" for="day1">日</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="day[]" class="form-check-input" type="checkbox" id="day2" value="月" @if(!empty($data['days']) && in_array('月', $data['days'])) checked @endif>
                                <label class="form-check-label" for="day2">月</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="day[]" class="form-check-input" type="checkbox" id="day3" value="火" @if(!empty($data['days']) && in_array('火', $data['days'])) checked @endif>
                                <label class="form-check-label" for="day3">火</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="day[]" class="form-check-input" type="checkbox" id="day4" value="水" @if(!empty($data['days']) && in_array('水', $data['days'])) checked @endif>
                                <label class="form-check-label" for="day4">水</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="day[]" class="form-check-input" type="checkbox" id="day5" value="木" @if(!empty($data['days']) && in_array('木', $data['days'])) checked @endif>
                                <label class="form-check-label" for="day5">木</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="day[]" class="form-check-input" type="checkbox" id="day6" value="金" @if(!empty($data['days']) && in_array('金', $data['days'])) checked @endif>
                                <label class="form-check-label" for="day6">金</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="day[]" class="form-check-input" type="checkbox" id="day7" value="土" @if(!empty($data['days']) && in_array('土', $data['days'])) checked @endif>
                                <label class="form-check-label" for="day7">土</label>
                            </div>
                        </dd>
                    </div>
                    <div class="profile-item">
                        <dt class="profile-head">
                            <p>お酒を飲む頻度</p>
                        </dt>
                        <dd class="profile-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sake" id="sake0" value="0" @if($data['sake'] === '0') checked @endif>
                                <label class="form-check-label" for="sake0">
                                    飲む
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sake" id="sake1" value="1" @if($data['sake'] === '1') checked @endif>
                                <label class="form-check-label" for="sake1">
                                    飲まない
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sake" id="sake2" value="2" @if($data['sake'] === '2') checked @endif>
                                <label class="form-check-label" for="sake2">
                                    お付き合い程度
                                </label>
                            </div>
                        </dd>
                    </div>
                    <div class="form-group profile-item">
                        <dt class="profile-head">
                            <label for="tag_1">グループの雰囲気</label>
                        </dt>
                        <dd class="profile-body">
                            <select name="tag_1" class="form-control" id="tag_1">
                                <option value="">選択してください</option>
                                <option class="option-woman" value="1" @if($data['tag_1'] === '1') selected @endif>おしとやか系</option>
                                <option class="option-woman" value="2" @if($data['tag_1'] === '2') selected @endif>綺麗め系</option>
                                <option class="option-woman" value="3" @if($data['tag_1'] === '3') selected @endif>可愛い系</option>
                                <option class="option-woman" value="4" @if($data['tag_1'] === '4') selected @endif>真面目系</option>
                                <option class="option-woman" value="5" @if($data['tag_1'] === '5') selected @endif>ギャル系</option>
                                <option class="option-woman" value="6" @if($data['tag_1'] === '6') selected @endif>地雷系</option>
                                <option class="option-man" value="7" @if($data['tag_1'] === '7') selected @endif>イケメン系</option>
                                <option class="option-man" value="8" @if($data['tag_1'] === '8') selected @endif>ダンディー系</option>
                                <option class="option-man" value="9" @if($data['tag_1'] === '9') selected @endif>塩顔系</option>
                                <option class="option-man" value="10" @if($data['tag_1'] === '10') selected @endif>ソース顔系</option>
                                <option class="option-man" value="11" @if($data['tag_1'] === '11') selected @endif>ゴリゴリ系</option>
                                <option class="option-man" value="12" @if($data['tag_1'] === '12') selected @endif>高収入系</option>
                            </select>
                        </dd>
                    </div>
                    <div class="form-group profile-item">
                        <dt class="profile-head">
                            <label for="tag_2">グループの年齢層</label>
                        </dt>
                        <dd class="profile-body">
                            <select name="tag_2" class="form-control" id="tag_2">
                                <option value="">選択してください</option>
                                <option value="1" @if($data['tag_2'] === '1') selected @endif>20代〜30代</option>
                                <option value="2" @if($data['tag_2'] === '2') selected @endif>30代〜40代</option>
                                <option value="3" @if($data['tag_2'] === '3') selected @endif>40代〜50代</option>
                                <option value="4" @if($data['tag_2'] === '4') selected @endif>50代〜60代</option>
                                <option value="5" @if($data['tag_2'] === '5') selected @endif>60代〜</option>
                            </select>
                        </dd>
                    </div>
                    <div class="form-group profile-item">
                        <dt class="profile-head">
                            <label for="tag_3">合コンの目的</label>
                        </dt>
                        <dd class="profile-body">
                            <select name="tag_3" class="form-control" id="tag_3">
                                <option value="">選択してください</option>
                                <option value="1" @if($data['tag_3'] === '1') selected @endif>恋人探し</option>
                                <option value="2" @if($data['tag_3'] === '2') selected @endif>結婚相手探し</option>
                                <option value="3" @if($data['tag_3'] === '3') selected @endif>友達探し</option>
                                <option value="4" @if($data['tag_3'] === '4') selected @endif>遊び相手探し</option>
                                <option value="5" @if($data['tag_3'] === '5') selected @endif>その他</option>
                            </select>
                        </dd>
                    </div>
                    <div class="form-group-footer">
                        <button class="btn btn-primary main-search-submit mb-3" type="submit">検索</button>
                    </div>
                </dl>

                <!-- 詳細条件設定後も、選択された地域の情報を保持するための記述 -->
                <input type="hidden" name="location" value="{{ $data['location'] }}">
                <input type="hidden" name="gender" value="{{ $data['gender'] }}">
            </form>
        </div>
    </div>

    <!-----------
    検索条件クリア
    ------------>
    <div class="select-clear">
        <div class="container row d-flex justify-content-center">
            <form class="col-md-6" method="GET" action="@yield('route')">
                <button type="submit" class="search-reset-btn">検索条件をクリアする</button>
                <!-- 現在見ている性別及び、場所の条件だけは保持したまま検索条件を削除する -->
                <input type="hidden" name="gender" value="{{ $data['gender'] }}">
                <input type="hidden" name="location" value="{{ $data['location'] }}">
            </form>
        </div>
    </div>
</div>

<div class="main-contents">
    <!----------------
    男女選択 
    ----------------->
    <div class="main-select-gender">
        <div class="container row d-flex justify-content-center">
            <form class="select-gender-form col-md-6" method="GET" action="@yield('route')">
                <!-- クリックされたボタンに「selected」クラスを付与することで、何が選択されているかわかりやすくするための記述 -->
                <!-- 男女のいずれかがクリックされた時、または初期のデフォルトでの表示設定（ユーザーが男性なら女性、女性なら男性） -->
                <button type="submit" class="main-select-gender-btn main-select-man @if ($data['gender'] == '0' || Auth::user()->gender === 1 && $data['gender'] === null) selected @endif" value="0" name="gender">男性</button>
                <button type="submit" class="main-select-gender-btn main-select-woman @if ($data['gender'] == '1' || Auth::user()->gender === 0 && $data['gender'] === null) selected @endif" value="1" name="gender">女性</button>

                <input type="hidden" name="location" value="{{ $data['location'] }}">
                <input type="hidden" name="hobby" value="{{ $data['hobby'] }}">
                <input type="hidden" name="job" value="{{ $data['job'] }}">
                <input type="hidden" name="smoking" value="{{ $data['smoking'] }}">
                <input type="hidden" name="number_people" value="{{ $data['number_people'] }}">
                <!-- htmlspecialChars内は文字列であり、配列は入れることができないので、foreachで処理 -->
                @if (!empty($data['days']))
                @foreach ($data['days'] as $day)
                <input type="hidden" name="day[]" value="{{ $day }}">
                @endforeach
                @endif
                <input type="hidden" name="sake" value="{{ $data['sake'] }}">
                <input type="hidden" name="tag_1" value="{{ $data['tag_1'] }}">
                <input type="hidden" name="tag_2" value="{{ $data['tag_2'] }}">
                <input type="hidden" name="tag_3" value="{{ $data['tag_3'] }}">
            </form>
        </div>
    </div>
    <div class="main-contents-container">
        <ul class="participant-list">
            <li class="participant-item">
                
                @foreach ($users as $user)
                <article class="participant @if ($user->gender === 0) man @endif">
                    <p class="participant-name @if ($user->gender === 0) man @endif">{{ $user->name }}（{{ $check->checkAge($user->age) }}）</p>
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
            </li>
        </ul>

        <div class="container page">
            {!!$users->appends(['location'=>$data['location'], 'gender'=>$data['gender'], 'hobby'=>$data['hobby'], 'job'=>$data['job'], 'smoking'=>$data['smoking'], 'number_people'=>$data['number_people'], 'sake'=>$data['sake'], 'tag_1'=>$data['tag_1'], 'tag_2'=>$data['tag_2'], 'tag_3'=>$data['tag_3'], 'day'=>$data['days']])->render()!!}
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

@endsection



