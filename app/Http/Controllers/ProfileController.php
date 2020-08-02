<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\HTML;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $post = Profile::all()->sortByDesc('updated_at');
        
        if (count($post) > 0) {
            $headline = $post->shift();
        } else {
            $headline = null;
        }
        return view('profile.index', ['headline' => $headline]);
    }
}
