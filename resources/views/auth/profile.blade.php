@extends('layouts.app')

@section('content')
<div class="profile-wrapper">
    <div class="profile-top">
        <p class="profile-app">会員登録はまだ済んでいません。<br class="is-sp"> <a href="{{ route('register') }}">ログイン情報を修正する⇦</a></p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card auth-contents-card">
                    <div class="card-header">{{ __('プロフィール設定') }}</div>
                    <div class="card-body">
                        <form class="justify-content-center" method="POST" action="{{ route('check') }}" enctype="multipart/form-data">
                        @csrf
                            <dl class="profile-list">
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="profile_img" class="profile-label">アイコン画像</label>
                                        @if($errors->has('profile_img'))
                                        <div class="">
                                            <strong class="text-danger profile-label">{{ $errors->first('profile_img') }}</strong>
                                        </div>
                                        @endif
                                    </dt>
                                    <dd class="profile-body">
                                        <div class="profile-image-preview-wrap">
                                            <img src="{{ asset('no-img/no-image.png') }}" alt="" class="profile-image-preview">
                                        </div>
                                        <input name="profile_img" type="file" class="form-control-file profile-label" id="profile_img">
                                    </dd>
                                </div>
                                <div class="profile-item">
                                    <dt class="profile-head">
                                        <p class="profile-label"><span>必須</span>性別</p>
                                        @if($errors->has('gender'))
                                        <div class="">
                                            <strong class="text-danger profile-label">{{ $errors->first('gender') }}</strong>
                                        </div>
                                        @endif
                                    </dt>
                                    <dd class="profile-body">
                                        <div class="form-check">
                                            <input class="form-check-input gender-radio" type="radio" name="gender" id="gender0" value="0" checked>
                                            <label class="form-check-label profile-label" for="gender0">
                                                男性
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input gender-radio" type="radio" name="gender" id="gender1" value="1" @if (old('gender') == '1') checked @endif>
                                            <label class="form-check-label profile-label" for="gender1">
                                                女性
                                            </label>
                                        </div>
                                    </dd>
                                    
                                </div>
                                
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="age" class="profile-label"><span>必須</span>年齢</label>
                                        @if($errors->has('age'))
                                        <div class="">
                                            <strong class="text-danger profile-label">{{ $errors->first('age') }}</strong>
                                        </div>
                                        @endif
                                    </dt>
                                    <dd class="profile-body">
                                        <select name="age" class="form-control profile-label" id="age">
                                            <option value="">選択してください</option>
                                            <option value="1" @if (old('age') == '1') selected @endif>20歳</option>
                                            <option value="2" @if (old('age') == '2') selected @endif>21歳</option>
                                            <option value="3" @if (old('age') == '3') selected @endif>22歳</option>
                                            <option value="4" @if (old('age') == '4') selected @endif>23歳</option>
                                            <option value="5" @if (old('age') == '5') selected @endif>24歳</option>
                                            <option value="6" @if (old('age') == '6') selected @endif>25歳</option>
                                            <option value="7" @if (old('age') == '7') selected @endif>26歳</option>
                                            <option value="8" @if (old('age') == '8') selected @endif>27歳</option>
                                            <option value="9" @if (old('age') == '9') selected @endif>28歳</option>
                                            <option value="10" @if (old('age') == '10') selected @endif>29歳</option>
                                            <option value="11" @if (old('age') == '11') selected @endif>30歳</option>
                                            <option value="12" @if (old('age') == '12') selected @endif>31歳</option>
                                            <option value="13" @if (old('age') == '13') selected @endif>32歳</option>
                                            <option value="14" @if (old('age') == '14') selected @endif>33歳</option>
                                            <option value="15" @if (old('age') == '15') selected @endif>34歳</option>
                                            <option value="16" @if (old('age') == '16') selected @endif>35歳</option>
                                            <option value="17" @if (old('age') == '17') selected @endif>36歳</option>
                                            <option value="18" @if (old('age') == '18') selected @endif>37歳</option>
                                            <option value="19" @if (old('age') == '19') selected @endif>38歳</option>
                                            <option value="20" @if (old('age') == '20') selected @endif>39歳</option>
                                            <option value="21" @if (old('age') == '21') selected @endif>40歳</option>
                                            <option value="22" @if (old('age') == '22') selected @endif>41歳</option>
                                            <option value="23" @if (old('age') == '23') selected @endif>42歳</option>
                                            <option value="24" @if (old('age') == '24') selected @endif>43歳</option>
                                            <option value="25" @if (old('age') == '25') selected @endif>44歳</option>
                                            <option value="26" @if (old('age') == '26') selected @endif>45歳</option>
                                            <option value="27" @if (old('age') == '27') selected @endif>46歳</option>
                                            <option value="28" @if (old('age') == '28') selected @endif>47歳</option>
                                            <option value="29" @if (old('age') == '29') selected @endif>48歳</option>
                                            <option value="30" @if (old('age') == '30') selected @endif>49歳</option>
                                            <option value="31" @if (old('age') == '31') selected @endif>50歳</option>
                                            <option value="32" @if (old('age') == '32') selected @endif>51歳</option>
                                            <option value="33" @if (old('age') == '33') selected @endif>52歳</option>
                                            <option value="34" @if (old('age') == '34') selected @endif>53歳</option>
                                            <option value="35" @if (old('age') == '35') selected @endif>54歳</option>
                                            <option value="36" @if (old('age') == '36') selected @endif>55歳</option>
                                            <option value="37" @if (old('age') == '37') selected @endif>56歳</option>
                                            <option value="38" @if (old('age') == '38') selected @endif>57歳</option>
                                            <option value="39" @if (old('age') == '39') selected @endif>58歳</option>
                                            <option value="40" @if (old('age') == '40') selected @endif>59歳</option>
                                            <option value="41" @if (old('age') == '41') selected @endif>60歳以上</option>
                                        </select>
                                    </dd>
                                </div>
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="location" class="profile-label"><span>必須</span>合コンする場所</label>
                                        @if($errors->has('location'))
                                        <div class="">
                                            <strong class="text-danger profile-label">{{ $errors->first('location') }}</strong>
                                        </div>
                                        @endif
                                    </dt>
                                    <dd class="profile-body">
                                        <select class="form-control profile-label" id="location" name="location">
                                            <option value="">選択してください</option>
                                            <option value="1" @if (old('location') == '1') selected @endif>北海道</option>
                                            <option value="2" @if (old('location') == '2') selected @endif>青森</option>
                                            <option value="3" @if (old('location') == '3') selected @endif>岩手</option>
                                            <option value="4" @if (old('location') == '4') selected @endif>宮城</option>
                                            <option value="5" @if (old('location') == '5') selected @endif>秋田</option>
                                            <option value="6" @if (old('location') == '6') selected @endif>山形</option>
                                            <option value="7" @if (old('location') == '7') selected @endif>福島</option>
                                            <option value="8" @if (old('location') == '8') selected @endif>愛知</option>
                                            <option value="9" @if (old('location') == '9') selected @endif>岐阜</option>
                                            <option value="10" @if (old('location') == '10') selected @endif>静岡</option>
                                            <option value="11" @if (old('location') == '11') selected @endif>三重</option>
                                            <option value="12" @if (old('location') == '12') selected @endif>富山</option>
                                            <option value="13" @if (old('location') == '13') selected @endif>石川</option>
                                            <option value="14" @if (old('location') == '14') selected @endif>福井</option>
                                            <option value="15" @if (old('location') == '15') selected @endif>新潟</option>
                                            <option value="16" @if (old('location') == '16') selected @endif>長野</option>
                                            <option value="17" @if (old('location') == '17') selected @endif>東京</option>
                                            <option value="18" @if (old('location') == '18') selected @endif>神奈川</option>
                                            <option value="19" @if (old('location') == '19') selected @endif>埼玉</option>
                                            <option value="20" @if (old('location') == '20') selected @endif>千葉</option>
                                            <option value="21" @if (old('location') == '21') selected @endif>茨城</option>
                                            <option value="22" @if (old('location') == '22') selected @endif>栃木</option>
                                            <option value="23" @if (old('location') == '23') selected @endif>群馬</option>
                                            <option value="24" @if (old('location') == '24') selected @endif>山梨</option>
                                            <option value="25" @if (old('location') == '25') selected @endif>大阪</option>
                                            <option value="26" @if (old('location') == '26') selected @endif>兵庫</option>
                                            <option value="27" @if (old('location') == '27') selected @endif>京都</option>
                                            <option value="28" @if (old('location') == '28') selected @endif>奈良</option>
                                            <option value="29" @if (old('location') == '29') selected @endif>滋賀</option>
                                            <option value="30" @if (old('location') == '30') selected @endif>和歌山</option>
                                            <option value="31" @if (old('location') == '31') selected @endif>岡山</option>
                                            <option value="32" @if (old('location') == '32') selected @endif>広島</option>
                                            <option value="33" @if (old('location') == '33') selected @endif>鳥取</option>
                                            <option value="34" @if (old('location') == '34') selected @endif>島根</option>
                                            <option value="35" @if (old('location') == '35') selected @endif>山口</option>
                                            <option value="36" @if (old('location') == '36') selected @endif>徳島</option>
                                            <option value="37" @if (old('location') == '37') selected @endif>香川</option>
                                            <option value="38" @if (old('location') == '38') selected @endif>高知</option>
                                            <option value="39" @if (old('location') == '39') selected @endif>愛媛</option>
                                            <option value="40" @if (old('location') == '40') selected @endif>福岡</option>
                                            <option value="41" @if (old('location') == '41') selected @endif>佐賀</option>
                                            <option value="42" @if (old('location') == '42') selected @endif>大分</option>
                                            <option value="43" @if (old('location') == '43') selected @endif>長崎</option>
                                            <option value="44" @if (old('location') == '44') selected @endif>熊本</option>
                                            <option value="45" @if (old('location') == '45') selected @endif>宮崎</option>
                                            <option value="46" @if (old('location') == '46') selected @endif>鹿児島</option>
                                            <option value="47" @if (old('location') == '47') selected @endif>沖縄</option>
                                        </select>
                                    </dd>
                                </div>
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="hobby" class="profile-label">趣味</label>
                                    </dt>
                                    <dd class="profile-body">
                                        <input name="hobby" type='text' class="form-control" id="hobby" rows="3" value="{{ old('hobby') }}">
                                    </dd>
                                </div>
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="job" class="profile-label">職業</label>
                                    </dt>
                                    <dd class="profile-body">
                                        <input name="job" type='text' class="form-control" id="job" rows="3" value="{{ old('job') }}">
                                    </dd>
                                </div>
                                <div class="profile-item">
                                    <dt class="profile-head">
                                        <p class="profile-label">お煙草</p>
                                    </dt>
                                    <dd class="profile-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="smoking" id="smoking0" value="0" checked>
                                            <label class="form-check-label profile-label" for="smoking0">
                                                吸う
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="smoking" id="smoking1" value="1"  @if (old('smoking') == '1') checked @endif>
                                            <label class="form-check-label profile-label" for="smoking1">
                                                吸わない
                                            </label>
                                        </div>
                                    </dd>
                                </div>
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="number_people" class="profile-label"><span>必須</span>参加人数（どちらか選択）</label>
                                        @if($errors->has('number_peoples'))
                                        <div class="">
                                            <strong class="text-danger profile-label">{{ $errors->first('number_peoples') }}</strong>
                                        </div>
                                        @endif
                                    </dt>
                                    <dd class="profile-body">
                                        <div class="number-people-wrapper profile d-flex">
                                            <input type="hidden" name="number_peoples">
                                            <select name="number_people_first" class="form-control profile-label" id="number_people">
                                                <option Value="" selected>選択してください</option>
                                                <option value="1" @if (old('number_people_first') == '1') selected @endif>1名</option>
                                                <option value="2" @if (old('number_people_first') == '2') selected @endif>2名</option>
                                                <option value="3" @if (old('number_people_first') == '3') selected @endif>3名</option>
                                                <option value="4" @if (old('number_people_first') == '4') selected @endif>4名</option>
                                                <option value="5" @if (old('number_people_first') == '5') selected @endif>5名</option>
                                                <option value="6" @if (old('number_people_first') == '6') selected @endif>6名</option>
                                                <option value="7" @if (old('number_people_first') == '7') selected @endif>7名</option>
                                                <option value="8" @if (old('number_people_first') == '8') selected @endif>8名</option>
                                                <option value="9" @if (old('number_people_first') == '9') selected @endif>9名</option>
                                                <option value="10" @if (old('number_people_first') == '10') selected @endif>10名</option>
                                            </select>
                                            〜
                                            <select name="number_people_second" class="form-control profile-label" id="number_people">
                                                <option value="" selected>選択してください</option>
                                                <option value="1" @if (old('number_people_second') == '1') selected @endif>1名</option>
                                                <option value="2" @if (old('number_people_second') == '2') selected @endif>2名</option>
                                                <option value="3" @if (old('number_people_second') == '3') selected @endif>3名</option>
                                                <option value="4" @if (old('number_people_second') == '4') selected @endif>4名</option>
                                                <option value="5" @if (old('number_people_second') == '5') selected @endif>5名</option>
                                                <option value="6" @if (old('number_people_second') == '6') selected @endif>6名</option>
                                                <option value="7" @if (old('number_people_second') == '7') selected @endif>7名</option>
                                                <option value="8" @if (old('number_people_second') == '8') selected @endif>8名</option>
                                                <option value="9" @if (old('number_people_second') == '9') selected @endif>9名</option>
                                                <option value="10" @if (old('number_people_second') == '10') selected @endif>10名</option>
                                                <option value="11" @if (old('number_people_second') == '11') selected @endif>10名以上</option>
                                            </select>
                                        </div>
                                        <div class="number-people-wrapper profile d-flex">
                                            <select name="number_people_single" class="form-control profile-label" id="number_people">
                                                <option value="" selected>選択してください</option>
                                                <option value="1" @if (old('number_people_single') == '1') selected @endif>1名</option>
                                                <option value="2" @if (old('number_people_single') == '2') selected @endif>2名</option>
                                                <option value="3" @if (old('number_people_single') == '3') selected @endif>3名</option>
                                                <option value="4" @if (old('number_people_single') == '4') selected @endif>4名</option>
                                                <option value="5" @if (old('number_people_single') == '5') selected @endif>5名</option>
                                                <option value="6" @if (old('number_people_single') == '6') selected @endif>6名</option>
                                                <option value="7" @if (old('number_people_single') == '7') selected @endif>7名</option>
                                                <option value="8" @if (old('number_people_single') == '8') selected @endif>8名</option>
                                                <option value="9" @if (old('number_people_single') == '9') selected @endif>9名</option>
                                                <option value="10" @if (old('number_people_single') == '10') selected @endif>10名</option>
                                                <option value="11" @if (old('number_people_single') == '11') selected @endif>10名以上</option>
                                            </select>
                                        </div>
                                    </dd>
                                </div>
                                <div class="profile-item">
                                    <dt class="profile-head">
                                        <p class="profile-label">希望曜日</p>
                                    </dt>
                                    <dd class="profile-body">
                                        <div class="form-check form-check-inline">
                                            <input name="day[]" class="form-check-input" type="checkbox" id="day1" value="日" @if (!empty(old('day')) && in_array('日', old('day'))) checked @endif>
                                            <label class="form-check-label profile-label" for="day1">日</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="day[]" class="form-check-input" type="checkbox" id="day2" value="月" @if (!empty(old('day')) && in_array('月', old('day'))) checked @endif>
                                            <label class="form-check-label profile-label" for="day2">月</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="day[]" class="form-check-input" type="checkbox" id="day3" value="火" @if (!empty(old('day')) && in_array('火', old('day'))) checked @endif>
                                            <label class="form-check-label profile-label" for="day3">火</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="day[]" class="form-check-input" type="checkbox" id="day4" value="水" @if (!empty(old('day')) && in_array('水', old('day'))) checked @endif>
                                            <label class="form-check-label profile-label" for="day4">水</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="day[]" class="form-check-input" type="checkbox" id="day5" value="木" @if (!empty(old('day')) && in_array('木', old('day'))) checked @endif>
                                            <label class="form-check-label profile-label" for="day5">木</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="day[]" class="form-check-input" type="checkbox" id="day6" value="金" @if (!empty(old('day')) && in_array('金', old('day'))) checked @endif>
                                            <label class="form-check-label profile-label" for="day6">金</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="day[]" class="form-check-input" type="checkbox" id="day7" value="土" @if (!empty(old('day')) && in_array('土', old('day'))) checked @endif>
                                            <label class="form-check-label profile-label" for="day7">土</label>
                                        </div>
                                    </dd>
                                </div>
                                <div class="profile-item">
                                    <dt class="profile-head">
                                        <p class="profile-label">お酒を飲む頻度</p>
                                    </dt>
                                    <dd class="profile-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sake" id="sake0" value="0" checked>
                                            <label class="form-check-label profile-label" for="sake0">
                                                飲む
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sake" id="sake1" value="1" @if (old('sake') == '1') checked @endif>
                                            <label class="form-check-label profile-label" for="sake1">
                                                飲まない
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sake" id="sake2" value="2" @if (old('sake') == '2') checked @endif>
                                            <label class="form-check-label profile-label" for="sake2">
                                                お付き合い程度
                                            </label>
                                        </div>
                                    </dd>
                                </div>
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="tag_1" class="profile-label">グループの雰囲気</label>
                                    </dt>
                                    <dd class="profile-body">
                                        <select name="tag_1" class="form-control profile-label" id="tag_1" value="">
                                            <option value="">選択してください</option>
                                            <option class="option-woman" value="1" hidden @if (old('tag_1') == '1') selected @endif>おしとやか系</option>
                                            <option class="option-woman" value="2" hidden @if (old('tag_1') == '2') selected @endif>綺麗め系</option>
                                            <option class="option-woman" value="3" hidden @if (old('tag_1') == '3') selected @endif>可愛い系</option>
                                            <option class="option-woman" value="4" hidden @if (old('tag_1') == '4') selected @endif>真面目系</option>
                                            <option class="option-woman" value="5" hidden @if (old('tag_1') == '5') selected @endif>ギャル系</option>
                                            <option class="option-woman" value="6" hidden @if (old('tag_1') == '6') selected @endif>地雷系</option>
                                            <option class="option-man" value="7" @if (old('tag_1') == '7') selected @endif>イケメン系</option>
                                            <option class="option-man" value="8" @if (old('tag_1') == '8') selected @endif>ダンディー系</option>
                                            <option class="option-man" value="9" @if (old('tag_1') == '9') selected @endif>塩顔系</option>
                                            <option class="option-man" value="10" @if (old('tag_1') == '10') selected @endif>ソース顔系</option>
                                            <option class="option-man" value="11" @if (old('tag_1') == '11') selected @endif>ゴリゴリ系</option>
                                            <option class="option-man" value="12" @if (old('tag_1') == '12') selected @endif>高収入系</option>
                                        </select>
                                    </dd>
                                </div>
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="tag_2" class="profile-label">グループの年齢層</label>
                                    </dt>
                                    <dd class="profile-body">
                                        <select name="tag_2" class="form-control profile-label" id="tag_2">
                                            <option value="">選択してください</option>
                                            <option value="1" @if (old('tag_2') == '1') selected @endif>20代〜30代</option>
                                            <option value="2" @if (old('tag_2') == '2') selected @endif>30代〜40代</option>
                                            <option value="3" @if (old('tag_2') == '3') selected @endif>40代〜50代</option>
                                            <option value="4" @if (old('tag_2') == '4') selected @endif>50代〜60代</option>
                                            <option value="5" @if (old('tag_2') == '5') selected @endif>60代〜</option>
                                        </select>
                                    </dd>
                                </div>
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="tag_3" class="profile-label">合コンの目的</label>
                                    </dt>
                                    <dd class="profile-body">
                                        <select name="tag_3" class="form-control profile-label" id="tag_3">
                                            <option value="">選択してください</option>
                                            <option value="1" @if (old('tag_3') == '1') selected @endif>恋人探し</option>
                                            <option value="2" @if (old('tag_3') == '2') selected @endif>結婚相手探し</option>
                                            <option value="3" @if (old('tag_3') == '3') selected @endif>友達探し</option>
                                            <option value="4" @if (old('tag_3') == '4') selected @endif>遊び相手探し</option>
                                            <option value="5" @if (old('tag_3') == '5') selected @endif>その他</option>
                                        </select>
                                    </dd>
                                </div>
                                <div class="form-group profile-item">
                                    <dt class="profile-head">
                                        <label for="pr_comment" class="profile-label">PRメッセージ</label>
                                    </dt>
                                    <dd class="profile-body">
                                        <textarea name="pr_comment" class="form-control" id="pr_comment" rows="3">{{ old('pr_comment') }}</textarea>
                                    </dd>
                                </div>
                                <div class="form-group-footer">
                                    <button class="btn btn-primary profile-submit" type="submit">決定</button>
                                </div>
                            </dl>
                            <input type="hidden" name="name" value="{{ $data['name'] }}">
                            <input type="hidden" name="email" value="{{ $data['email'] }}">
                            <input type="hidden" name="password" value="{{ $data['password'] }}">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection
