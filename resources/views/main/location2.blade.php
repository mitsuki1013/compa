@extends('layouts.app_main_contents')

@section('route')
{{ route('main.location2') }}
@endsection

@section('location-select-item')
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
@endsection