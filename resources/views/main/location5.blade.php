@extends('layouts.app_main_contents')

@section('route')
{{ route('main.location5') }}
@endsection

@section('location-select-item')
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
@endsection