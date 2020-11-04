@extends('layouts.app_main_contents')

@section('route')
{{ route('main.location6') }}
@endsection

@section('location-select-item')
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
@endsection