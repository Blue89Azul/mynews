@extends('layouts.front_2')

@section('content')

<div class="container">
    <div class="col-md-10 mx-auto">
        
        @if(!is_null($headline))
        <div class="row profile_item">
            <h3 class="icon">氏名</h3>
            <p>{{ $headline->your_name }}</p>
        </div>
        <div class="row profile_item">
            <h3 class="icon">性別</h3>
            @if($headline->gender === "0")
            <p>男性</p> 
            @elseif($headline->gender === "1")
            <p>女性</p> 
            @endif
        </div>
        <div class="row profile_item">
            <h3 class="icon">趣味</h3>
            @if($headline->hobby === "1")
            <p>スポーツ</p>
            @endif
            @if($headline->hobby === "2")
            <p>料理</p>
            @endif
            @if($headline->hobby === "3")
            <p>買い物</p>
            @endif
            @if($headline->hobby === "4")
            <p>読書</p>
            @endif
            @if($headline->hobby === "5")
            <p>その他</p>
            @endif
        </div>
        <div class="row profile_item">
            <h3 class="icon">自己紹介文</h3>
            <p>{{ $headline->selfIntro }}</p>
        </div>
        @else
        <div class="row profile_item">
            <h3 class="icon">氏名</h3>
        </div>
        <div class="row profile_item">
            <h3 class="icon">性別</h3>
        </div>
        <div class="row profile_item">
            <h3 class="icon">趣味</h3>
        </div>
        <div class="row profile_item">
            <h3 class="icon">自己紹介文</h3>
        </div>
        @endif
        <div class="btns">
        @if(isset($headline))
        <a href="{{ action('Admin\ProfileController@edit', ['id' => $headline->id]) }}" class="btn btn-primary">編集</a>
        @endif
        <a href="{{ action('Admin\ProfileController@create')}}" class="btn btn-primary">新規作成</a>
        </div>
     </div>
    </div>
</div>
@endsection