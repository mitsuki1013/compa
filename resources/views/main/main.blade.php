@extends('layouts.app_main')

@section('content')

<div class="main-select">
    <div class="container">
        <p class="main-select-top-title">地域選択</p>
        <div class="select-list-wrapper">
            <ul class="select-list main">
                <li class="select-item">
                    <form action="{{ route('main.location') }}" method="GET">
                        <button type="submit" class="select-link" name="main_location" value="1">関東</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location') }}" method="GET">
                        <button type="submit" class="select-link" name="main_location" value="2">関西</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location') }}" method="GET">
                        <button type="submit" class="select-link" name="main_location" value="3">東海・北信越</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location') }}" method="GET">
                        <button type="submit" class="select-link" name="main_location" value="4">九州・沖縄</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location') }}" method="GET">
                        <button type="submit" class="select-link" name="main_location" value="5">北海道・東北</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location') }}" method="GET">
                        <button type="submit" class="select-link" name="main_location" value="6">中国・四国</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection