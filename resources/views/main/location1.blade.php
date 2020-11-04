@extends('layouts.app_main_contents')

<!-- formのaction属性 -->
@section('route')
{{ route('main.location1') }}
@endsection

<!-- 地域選択 -->
@section('location-select-item')
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
@endsection