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
        if (empty($post)) {
            $headline = null;
        } else {
            $headline = $post->shift();
        }
        return view('profile.index', ['headline' => $headline]);
    }
}
