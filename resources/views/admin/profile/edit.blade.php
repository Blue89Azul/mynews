@extends('layouts.profile')
@section('title', 'プロフィール編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>Myプロフィール</h2>
            <form action="{{ action('Admin\ProfileController@update') }} " method="post" enctype="multipart/form-data">
                
                @if(count($errors)>0)
                <ul>
                    @foreach($errors as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="form-group row">
                    <label class="col-md-2" for="your_name">氏名</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="your_name" value="{{ $profile_form->your_name }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2" for="gender">性別</label>
                    <div class="col-md-10">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" value="0">男性
                            <input type="radio" name="gender" value="1">女性
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2" for="hobby">趣味</label>
                    <div class="col-md-10">
                    <select class="form-control hobby">
                        <option name="noSelect">選択して下さい</option>
                        <option name="sport" value="1">スポーツ</option>
                        <option name="cook" value="2">料理</option>
                        <option name="shopping" value="3}">買い物</option>
                        <option name="readBook" value="4">読書</option>
                        <option name="other" value="5">その他</option>
                    </select>                           
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label class="col-md-2" for="selfIntro">自己紹介</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="selfIntro" rows="20" >{{ $profile_form->selfIntro }}</textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-md-10">
                        <input type="hidden" name="id" value="{{ $profile_form->id }}">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-secondary" value="更新">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>