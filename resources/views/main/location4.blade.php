@extends('layouts.app_main_contents')

@section('route')
{{ route('main.location4') }}
@endsection

@section('location-select-item')
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
@endsection
