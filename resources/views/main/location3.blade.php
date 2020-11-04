@extends('layouts.app_main_contents')

@section('route')
{{ route('main.location3') }}
@endsection

@section('location-select-item')
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
@endsection
