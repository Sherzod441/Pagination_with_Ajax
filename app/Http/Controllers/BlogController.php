<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function showPosts(Request $request)
    {
        $posts = DB::table('posts')->paginate(4);

        if ($request->ajax()) {
            return response()->json(view()->make('posts', array('posts' => $posts))->render());
        }

        return view()->make('blog', array('posts' => $posts));
    }
}