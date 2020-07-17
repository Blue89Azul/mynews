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
                        <input type="text" class="form-control" name="your_name" value="{{ $profile_form->title }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2" for="gender">性別</label>
                    <div class="col-md-10">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" value="{{ $profile_form->gender }}">男性
                            <input type="radio" name="gender" value="{{ $profile_form->gender }}">女性
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2" for="hobby">趣味</label>
                    <div class="col-md-10">
                    <select class="form-control hobby">
                        <option name="noSelect">選択して下さい</option>
                        <option name="sport" value="{{ $profile_form->hobby}}">スポーツ</option>
                        <option name="cook" value="{{ $profile_form->hobby}}">料理</option>
                        <option name="shopping" value="{{ $profile_form->hobby}}">買い物</option>
                        <option name="readBook" value="{{ $profile_form->hobby}}">読書</option>
                        <option name="other" value="{{ $profile_form->hobby}}">その他</option>
                    </select>                           
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label class="col-md-2" for="selfIntro">自己紹介</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="selfIntro" value="{{ $profile_form->selfIntro }}" rows="20" ></textarea>
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