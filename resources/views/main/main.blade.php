@extends('layouts.app_main')

@section('content')

<div class="main-select">
    <div class="container">
        <p class="main-select-top-title">地域選択</p>
        <div class="select-list-wrapper">
            <ul class="select-list main">
                <li class="select-item">
                    <form action="{{ route('main.location1') }}" method="GET">
                        <button type="submit" class="select-link">関東</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location2') }}" method="GET">
                        <button type="submit" class="select-link">関西</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location3') }}" method="GET">
                        <button type="submit" class="select-link">東海・北信越</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location4') }}" method="GET">
                        <button type="submit" class="select-link">九州・沖縄</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location5') }}" method="GET">
                        <button type="submit" class="select-link">北海道・東北</button>
                    </form>
                </li>
                <li class="select-item">
                    <form action="{{ route('main.location6') }}" method="GET">
                        <button type="submit" class="select-link">中国・四国</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection