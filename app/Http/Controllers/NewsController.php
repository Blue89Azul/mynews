<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at');
        //newsの全テーブルを取得
        
        if (count($posts)>0) {
            $headline = $posts->shift();
        //$headlineに最新記事のみ代入
        } else {
            $headline = null;
        }
        //view()の中にある連想配列は
        //今回の場合、index.bladeで変数として使用できる。
        //ただコントローラ内の変数のため、クラスに準じた記述方法
        return view('news.index', ['headline' => $headline, 'posts' => $posts ]);
    }
}
