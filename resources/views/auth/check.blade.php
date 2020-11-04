@extends('layouts.app')

@section('content')

<div class="main-contents">
    <div class="container main-contents-container check-container">
        <article class="participant check">
            <p class="participant-name @if ($data['gender'] == '0') man @endif">{{ $data['name'] }}  --- {{ $check->checkAge($data['age']) }} ---</p>
            <div href="" class="participant-link">
                <div class="participant-head">
                    <div class="participant-img-wrapper">
                        <img class="participant-img" src="{{ asset($data['profile_img']) }}" alt="">
                    </div>
                    <div class="participant-tags">
                        @if ($data['tag_1'] !== null)
                        <p class="tag-content @if ($data['gender'] == '0') man @endif">{{ $check->checkTag_1($data['tag_1']) }}</p>
                        @endif
                        @if ($data['tag_2'] !== null)
                        <p class="tag-content @if ($data['gender'] == '0') man @endif">{{ $check->checkTag_2($data['tag_2']) }}</p>
                        @endif
                        @if ($data['tag_3'] !== null)
                        <p class="tag-content @if ($data['gender'] == '0') man @endif">{{ $check->checkTag_3($data['tag_3']) }}</p>
                        @endif
                    </div>
                </div>
                <div class="participant-body">
                    <div class="participant-contents">
                        <dl class="participant-contents-list">
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($data['gender'] == '0') man @endif">
                                    <p>性別</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $check->checkGender($data['gender']) }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($data['gender'] == '0') man @endif">
                                    <p>人数</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>
                                        {{ $data['number_people'] }}
                                    </p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($data['gender'] == '0') man @endif">
                                    <p>希望場所</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $check->checkLocation($data['location']) }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($data['gender'] == '0') man @endif">
                                    <p>希望曜日</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>
                                        {{ $data['day'] }}
                                    </p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($data['gender'] == '0') man @endif">
                                    <p>職業</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $data['job'] }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($data['gender'] == '0') man @endif">
                                    <p>趣味</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $data['hobby'] }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($data['gender'] == '0') man @endif">
                                    <p>お煙草</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $check->checkSmoking($data['smoking']) }}</p>
                                </dd>
                            </div>
                            <div class="participant-contents-item">
                                <dt class="participant-contents-head @if ($data['gender'] == '0') man @endif">
                                    <p>お酒の頻度</p>
                                </dt>
                                <dd class="participant-contents-body">
                                    <p>{{ $check->checkSake($data['sake']) }}</p>
                                </dd>
                            </div>
                        </dl>
                    </div>
                    @if ($data['pr_comment'] !== null)
                    <div class="participant-pr @if ($data['gender'] == '0') man @endif">
                        <p class="participant-pr-text">{{ $data['pr_comment'] }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </article>
    </div>
</div>    
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="hidden" name="name" value="{{ $data['name'] }}">
        <input type="hidden" name="email" value="{{ $data['email'] }}">
        <input type="hidden" name="password" value="{{ $data['password'] }}">
        <input type="hidden" name="profile_img" value="{{ $data['profile_img'] }}">
        <input type="hidden" name="gender" value="{{ $data['gender'] }}">
        <input type="hidden" name="age" value="{{ $data['age'] }}">
        <input type="hidden" name="pr_comment" value="{{ $data['pr_comment'] }}">
        <input type="hidden" name="location" value="{{ $data['location'] }}">
        <input type="hidden" name="hobby" value="{{ $data['hobby'] }}">
        <input type="hidden" name="job" value="{{ $data['job'] }}">
        <input type="hidden" name="smoking" value="{{ $data['smoking'] }}">
        <input type="hidden" name="number_people" value="{{ $data['number_people'] }}">
        <input type="hidden" name="day" value="{{ $data['day'] }}">
        <input type="hidden" name="sake" value="{{ $data['sake'] }}">
        <input type="hidden" name="tag_1" value="{{ $data['tag_1'] }}">
        <input type="hidden" name="tag_2" value="{{ $data['tag_2'] }}">
        <input type="hidden" name="tag_3" value="{{ $data['tag_3'] }}">
        <div class="check-form-submit">
            <button type="submit" class="btn btn-primary check-submit-btn">この内容で登録する</button>
        </div>
    </form>

@endsection












