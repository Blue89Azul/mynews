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
                    <input type="radio" name="gender" value="0" 
                            <?php if (!empty($profile_form->gender) && $profile_form->gender === "0") { echo 'checked'; } ?>/>男性
                            <input type="radio" name="gender" value="1" 
                            <?php if (!empty($profile_form->gender) && $profile_form->gender === "1") { echo 'checked'; } ?>/>女性
                        </div>
                    </div>
                </div>
                
                    <div class="form-group row">
                    <label class="col-md-2" for="hobby">趣味</label>
                    <div class="col-md-10">
                    <select class="form-control" name="hobby">
                        <option>選択して下さい</option>
                        <option value="1"
                        <?php if (!empty($profile_form->hobby) && $profile_form->hobby === "1") { echo 'selected'; } ?>>スポーツ</option>
                        <option value="2"
                        <?php if (!empty($profile_form->hobby) && $profile_form->hobby === "2") { echo 'selected'; } ?>>料理</option>
                        <option value="3" 
                        <?php if (!empty($profile_form->hobby) && $profile_form->hobby === "3") { echo 'selected'; } ?>>買い物</option>
                        <option value="4" 
                        <?php if (!empty($profile_form->hobby) && $profile_form->hobby === "4") { echo 'selected'; } ?>>読書</option>
                        <option value="5" 
                        <?php if (!empty($profile_form->hobby) && $profile_form->hobby === "5") { echo 'selected'; } ?>>その他</option>
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
            <div class="row mt-5">
                <div class="col-md-4 mx-auto">
                    <h2>編集履歴</h2>
                    <ul class="list-group">
                        @if($profile_form->historias != NULL)
                        <!--主クラスから従クラスのtableを参照する-->
                        @foreach($profile_form->historias as $historia)
                        <li class="list-group-item">{{ $historia->edited_at }}</li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection