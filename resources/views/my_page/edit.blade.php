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
    <header class="my_page_header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card auth-contents-card">
                        <div class="card-header">{{ __('プロフィール編集') }}</div>
                        <div class="card-body">
                            <form class="" method="POST" action="{{ route('my_page.preview') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="my_page_head form-control-file">
                                    <img  src="{{ asset($user->profile_img) }}" alt="{{ $user->name }}" class="my_img profile-image-preview">
                                </div>
                                <div class="my_page_body">
                                    <div class="form-group my_contents_item ">
                                        <input type="text" class="form-control my_contents_text my_name_text" name="name" value="{{ $user->name }}">
                                        @if($errors->has('name'))
                                        <div class="">
                                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="my_contents_item">
                                        <input type="text" class="form-control my_contents_text my_email_text" name="email" value="{{ $user->email }}">
                                        @if($errors->has('email'))
                                        <div class="">
                                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <dl class="profile-list my_page_edit_list">
                                    <div class="form-group profile-item">
                                        <dt class="profile-head">
                                            <label for="profile_img">アイコン画像</label>
                                            @if($errors->has('profile_img'))
                                            <div class="">
                                                <strong class="text-danger">{{ $errors->first('profile_img') }}</strong>
                                            </div>
                                            @endif
                                        </dt>
                                        <dd class="profile-body">
                                            <input id="profile_img" type="file" class="form-control-file" value="" name="profile_img">
                                        </dd>
                                    </div>
                                    <div class="profile-item">
                                        <dt class="profile-head">
                                            <p>性別</p>
                                            @if($errors->has('gender'))
                                            <div class="">
                                                <strong class="text-danger">{{ $errors->first('gender') }}</strong>
                                            </div>
                                            @endif
                                        </dt>
                                        <dd class="profile-body">
                                            <div class="form-check">
                                                <input class="form-check-input gender-radio" type="radio" name="gender" id="gender0" value="0" @if($user->gender === 0) checked @endif>
                                                <label class="form-check-label" for="gender0">
                                                    男性
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input gender-radio" type="radio" name="gender" id="gender1" value="1" @if($user->gender === 1) checked @endif>
                                                <label class="form-check-label" for="gender1">
                                                    女性
                                                </label>
                                            </div>
                                        </dd>
                                        
                                    </div>
                                    
                                    <div class="form-group profile-item">
                                        <dt class="profile-head">
                                            <label for="age">年齢</label>
                                            @if($errors->has('age'))
                                            <div class="">
                                                <strong class="text-danger">{{ $errors->first('age') }}</strong>
                                            </div>
                                            @endif
                                        </dt>
                                        <dd class="profile-body">
                                            <select name="age" class="form-control" id="age">
                                                <option value="">選択してください</option>
                                                <option value="1" @if($user->age === 1) selected @endif>20歳</option>
                                                <option value="2" @if($user->age === 2) selected @endif>21歳</option>
                                                <option value="3" @if($user->age === 3) selected @endif>22歳</option>
                                                <option value="4" @if($user->age === 4) selected @endif>23歳</option>
                                                <option value="5" @if($user->age === 5) selected @endif>24歳</option>
                                                <option value="6" @if($user->age === 6) selected @endif>25歳</option>
                                                <option value="7" @if($user->age === 7) selected @endif>26歳</option>
                                                <option value="8" @if($user->age === 8) selected @endif>27歳</option>
                                                <option value="9" @if($user->age === 9) selected @endif>28歳</option>
                                                <option value="10" @if($user->age === 10) selected @endif>29歳</option>
                                                <option value="11" @if($user->age === 11) selected @endif>30歳</option>
                                                <option value="12" @if($user->age === 12) selected @endif>31歳</option>
                                                <option value="13" @if($user->age === 13) selected @endif>32歳</option>
                                                <option value="14" @if($user->age === 14) selected @endif>33歳</option>
                                                <option value="15" @if($user->age === 15) selected @endif>34歳</option>
                                                <option value="16" @if($user->age === 16) selected @endif>35歳</option>
                                                <option value="17" @if($user->age === 17) selected @endif>36歳</option>
                                                <option value="18" @if($user->age === 18) selected @endif>37歳</option>
                                                <option value="19" @if($user->age === 19) selected @endif>38歳</option>
                                                <option value="20" @if($user->age === 20) selected @endif>39歳</option>
                                                <option value="21" @if($user->age === 21) selected @endif>40歳</option>
                                                <option value="22" @if($user->age === 22) selected @endif>41歳</option>
                                                <option value="23" @if($user->age === 23) selected @endif>42歳</option>
                                                <option value="24" @if($user->age === 24) selected @endif>43歳</option>
                                                <option value="25" @if($user->age === 25) selected @endif>44歳</option>
                                                <option value="26" @if($user->age === 26) selected @endif>45歳</option>
                                                <option value="27" @if($user->age === 27) selected @endif>46歳</option>
                                                <option value="28" @if($user->age === 28) selected @endif>47歳</option>
                                                <option value="29" @if($user->age === 29) selected @endif>48歳</option>
                                                <option value="30" @if($user->age === 30) selected @endif>49歳</option>
                                                <option value="31" @if($user->age === 31) selected @endif>50歳</option>
                                                <option value="32" @if($user->age === 32) selected @endif>51歳</option>
                                                <option value="33" @if($user->age === 33) selected @endif>52歳</option>
                                                <option value="34" @if($user->age === 34) selected @endif>53歳</option>
                                                <option value="35" @if($user->age === 35) selected @endif>54歳</option>
                                                <option value="36" @if($user->age === 36) selected @endif>55歳</option>
                                                <option value="37" @if($user->age === 37) selected @endif>56歳</option>
                                                <option value="38" @if($user->age === 38) selected @endif>57歳</option>
                                                <option value="39" @if($user->age === 39) selected @endif>58歳</option>
                                                <option value="40" @if($user->age === 40) selected @endif>59歳</option>
                                                <option value="41" @if($user->age === 41) selected @endif>60歳以上</option>
                                            </select>
                                        </dd>
                                    </div>
                                    <div class="form-group profile-item">
                                        <dt class="profile-head">
                                            <label for="location">合コンする場所</label>
                                            @if($errors->has('location'))
                                            <div class="">
                                                <strong class="text-danger">{{ $errors->first('location') }}</strong>
                                            </div>
                                            @endif
                                        </dt>
                                        <dd class="profile-body">
                                            <select class="form-control" id="location" name="location">
                                                <option value="">選択してください</option>
                                                <option value="1" @if($user->location === 1) selected @endif>北海道</option>
                                                <option value="2" @if($user->location === 2) selected @endif>青森</option>
                                                <option value="3" @if($user->location === 3) selected @endif>岩手</option>
                                                <option value="4" @if($user->location === 4) selected @endif>宮城</option>
                                                <option value="5" @if($user->location === 5) selected @endif>秋田</option>
                                                <option value="6" @if($user->location === 6) selected @endif>山形</option>
                                                <option value="7" @if($user->location === 7) selected @endif>福島</option>
                                                <option value="8" @if($user->location === 8) selected @endif>愛知</option>
                                                <option value="9" @if($user->location === 9) selected @endif>岐阜</option>
                                                <option value="10" @if($user->location === 10) selected @endif>静岡</option>
                                                <option value="11" @if($user->location === 11) selected @endif>三重</option>
                                                <option value="12" @if($user->location === 12) selected @endif>富山</option>
                                                <option value="13" @if($user->location === 13) selected @endif>石川</option>
                                                <option value="14" @if($user->location === 14) selected @endif>福井</option>
                                                <option value="15" @if($user->location === 15) selected @endif>新潟</option>
                                                <option value="16" @if($user->location === 16) selected @endif>長野</option>
                                                <option value="17" @if($user->location === 17) selected @endif>東京</option>
                                                <option value="18" @if($user->location === 18) selected @endif>神奈川</option>
                                                <option value="19" @if($user->location === 19) selected @endif>埼玉</option>
                                                <option value="20" @if($user->location === 20) selected @endif>千葉</option>
                                                <option value="21" @if($user->location === 21) selected @endif>茨城</option>
                                                <option value="22" @if($user->location === 22) selected @endif>栃木</option>
                                                <option value="23" @if($user->location === 23) selected @endif>群馬</option>
                                                <option value="24" @if($user->location === 24) selected @endif>山梨</option>
                                                <option value="25" @if($user->location === 25) selected @endif>大阪</option>
                                                <option value="26" @if($user->location === 26) selected @endif>兵庫</option>
                                                <option value="27" @if($user->location === 27) selected @endif>京都</option>
                                                <option value="28" @if($user->location === 28) selected @endif>奈良</option>
                                                <option value="29" @if($user->location === 29) selected @endif>滋賀</option>
                                                <option value="30" @if($user->location === 30) selected @endif>和歌山</option>
                                                <option value="31" @if($user->location === 31) selected @endif>岡山</option>
                                                <option value="32" @if($user->location === 32) selected @endif>広島</option>
                                                <option value="33" @if($user->location === 33) selected @endif>鳥取</option>
                                                <option value="34" @if($user->location === 34) selected @endif>島根</option>
                                                <option value="35" @if($user->location === 35) selected @endif>山口</option>
                                                <option value="36" @if($user->location === 36) selected @endif>徳島</option>
                                                <option value="37" @if($user->location === 37) selected @endif>香川</option>
                                                <option value="38" @if($user->location === 38) selected @endif>高知</option>
                                                <option value="39" @if($user->location === 39) selected @endif>愛媛</option>
                                                <option value="40" @if($user->location === 40) selected @endif>福岡</option>
                                                <option value="41" @if($user->location === 41) selected @endif>佐賀</option>
                                                <option value="42" @if($user->location === 42) selected @endif>大分</option>
                                                <option value="43" @if($user->location === 43) selected @endif>長崎</option>
                                                <option value="44" @if($user->location === 44) selected @endif>熊本</option>
                                                <option value="45" @if($user->location === 45) selected @endif>宮崎</option>
                                                <option value="46" @if($user->location === 46) selected @endif>鹿児島</option>
                                                <option value="47" @if($user->location === 47) selected @endif>沖縄</option>
                                            </select>
                                        </dd>
                                    </div>
                                    <div class="form-group profile-item">
                                        <dt class="profile-head">
                                            <label for="hobby">趣味</label>
                                        </dt>
                                        <dd class="profile-body">
                                            <input name="hobby" type='text' class="form-control" id="hobby" rows="3" value="{{ $user->hobby }}">
                                        </dd>
                                    </div>
                                    <div class="form-group profile-item">
                                        <dt class="profile-head">
                                            <label for="job">職業</label>
                                        </dt>
                                        <dd class="profile-body">
                                            <input name="job" type='text' class="form-control" id="job" rows="3" value="{{ $user->job }}">
                                        </dd>
                                    </div>
                                    <div class="profile-item">
                                        <dt class="profile-head">
                                            <p>お煙草</p>
                                        </dt>
                                        <dd class="profile-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="smoking" id="smoking0" value="0" @if($user->smoking === 0) checked @endif>
                                                <label class="form-check-label" for="smoking0">
                                                    吸う
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="smoking" id="smoking1" value="1" @if($user->smoking === 1) checked @endif>
                                                <label class="form-check-label" for="smoking1">
                                                    吸わない
                                                </label>
                                            </div>
                                        </dd>
                                    </div>
                                    <div class="form-group profile-item">
                                        <dt class="profile-head">
                                            <label for="number_people">人数</label>
                                            @if($errors->has('number_peoples'))
                                            <div class="">
                                                <strong class="text-danger">{{ $errors->first('number_peoples') }}</strong>
                                            </div>
                                            @endif
                                        </dt>
                                        <dd class="profile-body">
                                            <div class="number-people-wrapper profile d-flex">
                                                <input type="hidden" name="number_peoples">
                                                <select name="number_people_first" class="form-control" id="number_people">
                                                    <option Value="" selected>選択してください</option>
                                                    <option value="1" @if($people_array[0] === '1名') selected @endif>1名</option>
                                                    <option value="2" @if($people_array[0] === '2名') selected @endif>2名</option>
                                                    <option value="3" @if($people_array[0] === '3名') selected @endif>3名</option>
                                                    <option value="4" @if($people_array[0] === '4名') selected @endif>4名</option>
                                                    <option value="5" @if($people_array[0] === '5名') selected @endif>5名</option>
                                                    <option value="6" @if($people_array[0] === '6名') selected @endif>6名</option>
                                                    <option value="7" @if($people_array[0] === '7名') selected @endif>7名</option>
                                                    <option value="8" @if($people_array[0] === '8名') selected @endif>8名</option>
                                                    <option value="9" @if($people_array[0] === '9名') selected @endif>9名</option>
                                                    <option value="10" @if($people_array[0] === '10名') selected @endif>10名</option>
                                                </select>
                                                〜
                                                <select name="number_people_second" class="form-control" id="number_people">
                                                    <option value="" selected>選択してください</option>
                                                    <option value="1" @if($people_array[1] === '1名') selected @endif>1名</option>
                                                    <option value="2" @if($people_array[1] === '2名') selected @endif>2名</option>
                                                    <option value="3" @if($people_array[1] === '3名') selected @endif>3名</option>
                                                    <option value="4" @if($people_array[1] === '4名') selected @endif>4名</option>
                                                    <option value="5" @if($people_array[1] === '5名') selected @endif>5名</option>
                                                    <option value="6" @if($people_array[1] === '6名') selected @endif>6名</option>
                                                    <option value="7" @if($people_array[1] === '7名') selected @endif>7名</option>
                                                    <option value="8" @if($people_array[1] === '8名') selected @endif>8名</option>
                                                    <option value="9" @if($people_array[1] === '9名') selected @endif>9名</option>
                                                    <option value="10" @if($people_array[1] === '10名') selected @endif>10名</option>
                                                    <option value="11" @if($people_array[1] === '10名以上') selected @endif>10名以上</option>
                                            </select>
                                            </div>
                                            <div class="number-people-wrapper profile d-flex">
                                                <select name="number_people_single" class="form-control" id="number_people">
                                                    <option value="" selected>選択してください</option>
                                                    <option value="1" @if($people_array === '1名') selected @endif>1名</option>
                                                    <option value="2" @if($people_array === '2名') selected @endif>2名</option>
                                                    <option value="3" @if($people_array === '3名') selected @endif>3名</option>
                                                    <option value="4" @if($people_array === '4名') selected @endif>4名</option>
                                                    <option value="5" @if($people_array === '5名') selected @endif>5名</option>
                                                    <option value="6" @if($people_array === '6名') selected @endif>6名</option>
                                                    <option value="7" @if($people_array === '7名') selected @endif>7名</option>
                                                    <option value="8" @if($people_array === '8名') selected @endif>8名</option>
                                                    <option value="9" @if($people_array === '9名') selected @endif>9名</option>
                                                    <option value="10" @if($people_array === '10名') selected @endif>10名</option>
                                                    <option value="11" @if($people_array === '10名以上') selected @endif>10名以上</option>
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
                                                <input name="day[]" class="form-check-input" type="checkbox" id="day1" value="日" @if(preg_match('/日/', $user->day)) === checked @endif>
                                                <label class="form-check-label" for="day1">日</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="day[]" class="form-check-input" type="checkbox" id="day2" value="月" @if(preg_match('/月/', $user->day)) === checked @endif>
                                                <label class="form-check-label" for="day2">月</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="day[]" class="form-check-input" type="checkbox" id="day3" value="火" @if(preg_match('/火/', $user->day)) === checked @endif>
                                                <label class="form-check-label" for="day3">火</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="day[]" class="form-check-input" type="checkbox" id="day4" value="水" @if(preg_match('/水/', $user->day)) === checked @endif>
                                                <label class="form-check-label" for="day4">水</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="day[]" class="form-check-input" type="checkbox" id="day5" value="木" @if(preg_match('/木/', $user->day)) === checked @endif>
                                                <label class="form-check-label" for="day5">木</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="day[]" class="form-check-input" type="checkbox" id="day6" value="金" @if(preg_match('/金/', $user->day)) === checked @endif>
                                                <label class="form-check-label" for="day6">金</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="day[]" class="form-check-input" type="checkbox" id="day7" value="土" @if(preg_match('/土/', $user->day)) === checked @endif>
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
                                                <input class="form-check-input" type="radio" name="sake" id="sake0" value="0" checked>
                                                <label class="form-check-label" for="sake0">
                                                    飲む
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sake" id="sake1" value="1">
                                                <label class="form-check-label" for="sake1">
                                                    飲まない
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sake" id="sake2" value="2">
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
                                            <select name="tag_1" class="form-control" id="tag_1" value="">
                                                <option value="">選択してください</option>
                                                <option class="option-woman" value="1" hidden @if ($user->tag_1 === 1) selected @endif>おしとやか系</option>
                                                <option class="option-woman" value="2" hidden @if ($user->tag_1 === 2) selected @endif>綺麗め系</option>
                                                <option class="option-woman" value="3" hidden @if ($user->tag_1 === 3) selected @endif>可愛い系</option>
                                                <option class="option-woman" value="4" hidden @if ($user->tag_1 === 4) selected @endif>真面目系</option>
                                                <option class="option-woman" value="5" hidden @if ($user->tag_1 === 5) selected @endif>ギャル系</option>
                                                <option class="option-woman" value="6" hidden @if ($user->tag_1 === 6) selected @endif>地雷系</option>
                                                <option class="option-man" value="7" @if ($user->tag_1 === 7) selected @endif>イケメン系</option>
                                                <option class="option-man" value="8" @if ($user->tag_1 === 8) selected @endif>ダンディー系</option>
                                                <option class="option-man" value="9" @if ($user->tag_1 === 9) selected @endif>塩顔系</option>
                                                <option class="option-man" value="10" @if ($user->tag_1 === 10) selected @endif>ソース顔系</option>
                                                <option class="option-man" value="11" @if ($user->tag_1 === 11) selected @endif>ゴリゴリ系</option>
                                                <option class="option-man" value="12" @if ($user->tag_1 === 12) selected @endif>高収入系</option>
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
                                                <option value="1" @if ($user->tag_2 === 1) selected @endif>20代〜30代</option>
                                                <option value="2" @if ($user->tag_2 === 2) selected @endif>30代〜40代</option>
                                                <option value="3" @if ($user->tag_2 === 3) selected @endif>40代〜50代</option>
                                                <option value="4" @if ($user->tag_2 === 4) selected @endif>50代〜60代</option>
                                                <option value="5" @if ($user->tag_2 === 5) selected @endif>60代〜</option>
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
                                                <option value="1" @if ($user->tag_3 === 1) selected @endif>恋人探し</option>
                                                <option value="2" @if ($user->tag_3 === 2) selected @endif>結婚相手探し</option>
                                                <option value="3" @if ($user->tag_3 === 3) selected @endif>友達探し</option>
                                                <option value="4" @if ($user->tag_3 === 4) selected @endif>遊び相手探し</option>
                                                <option value="5" @if ($user->tag_3 === 5) selected @endif>その他</option>
                                            </select>
                                        </dd>
                                    </div>
                                    <div class="form-group profile-item">
                                        <dt class="profile-head">
                                            <label for="pr_comment">PRメッセージ</label>
                                        </dt>
                                        <dd class="profile-body">
                                            <textarea name="pr_comment" class="form-control" id="pr_comment" rows="3">{{ $user->pr_comment }}</textarea>
                                        </dd>
                                    </div>
                                    <div class="form-group-footer">
                                        <button class="btn btn-primary profile-submit" type="submit">決定</button>
                                    </div>
                                </dl>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>