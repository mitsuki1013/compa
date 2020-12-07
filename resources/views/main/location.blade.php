@extends('layouts.app_main_contents')

<!-- 地域選択 -->
@section('location-select-item')
@if ($data['main_location'] == '1')
<button class="location-btn @if ($data['location'] === null) selected @endif">関東全て</button>
<ul class="select-list region">
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '17') selected @endif" value="17" name="location">東京</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '18') selected @endif" value="18" name="location">神奈川</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '19') selected @endif" value="19" name="location">埼玉</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '20') selected @endif" value="20" name="location">千葉</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '21') selected @endif" value="21" name="location">茨城</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '22') selected @endif" value="22" name="location">栃木</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '23') selected @endif" value="23" name="location">群馬</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '24') selected @endif" value="24" name="location">山梨</button>
    </li>
</ul>
@endif

@if ($data['main_location'] == '2')
<button class="location-btn @if ($data['location'] === null) selected @endif">関西全て</button>
<ul class="select-list region">
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '25') selected @endif" name='location' value="25">大阪</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '26') selected @endif" name='location' value="26">兵庫</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '27') selected @endif" name='location' value="27">京都</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '28') selected @endif" name='location' value="28">奈良</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '29') selected @endif" name='location' value="29">滋賀</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '30') selected @endif" name='location' value="30">和歌山</button>
    </li>
</ul>
@endif

@if ($data['main_location'] == '3')
<button class="location-btn @if ($data['location'] === null) selected @endif">東海・北信越全て</button>
<ul class="select-list region">
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '8') selected @endif" name="location" value="8">愛知</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '9') selected @endif" name="location" value="9">岐阜</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '10') selected @endif" name="location" value="10">静岡</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '11') selected @endif" name="location" value="11">三重</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '12') selected @endif" name="location" value="12">富山</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '13') selected @endif" name="location" value="13">石川</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '14') selected @endif" name="location" value="14">福井</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '15') selected @endif" name="location"value="15">新潟</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '16') selected @endif" name="location"value="16">長野</button>
    </li>
</ul>
@endif

@if ($data['main_location'] == '4')
<button class="location-btn @if ($data['location'] === null) selected @endif">九州・沖縄全て</button>
<ul class="select-list region">
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '40') selected @endif" name="location" value="40">福岡</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '41') selected @endif" name="location" value="41">佐賀</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '42') selected @endif" name="location" value="42">大分</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '43') selected @endif" name="location" value="43">長崎</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '44') selected @endif" name="location" value="44">熊本</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '45') selected @endif" name="location" value="45">宮崎</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '46') selected @endif" name="location" value="46">鹿児島</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '47') selected @endif" name="location"value="47">沖縄</button>
    </li>
</ul>
@endif

@if ($data['main_location'] == '5')
<button class="location-btn @if ($data['location'] === null) selected @endif">北海道・東北全て</button>
<ul class="select-list region">
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '1') selected @endif" name='location' value="1">北海道</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '2') selected @endif" name='location' value="2">青森</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '3') selected @endif" name='location' value="3">岩手</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '4') selected @endif" name='location' value="4">宮城</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '5') selected @endif" name='location' value="5">秋田</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '6') selected @endif" name='location' value="6">山形</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '7') selected @endif" name='location' value="7">福島</button>
    </li>
</ul>
@endif

@if ($data['main_location'] == '6')
<button class="location-btn @if ($data['location'] === null) selected @endif">中国・四国全て</button>
<ul class="select-list region">
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '31') selected @endif" name='location' value="31">岡山</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '32') selected @endif" name='location' value="32">広島</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '33') selected @endif" name='location' value="33">鳥取</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '34') selected @endif" name='location' value="34">島根</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '35') selected @endif" name='location' value="35">山口</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '36') selected @endif" name='location' value="36">徳島</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '37') selected @endif" name='location' value="37">香川</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '38') selected @endif" name='location' value="38">高知</button>
    </li>
    <li class="location-select-item">
        <button type="submit" class="location-select-btn @if ($data['location'] == '39') selected @endif" name='location' value="39">愛媛</button>
    </li>
</ul>
@endif
@endsection