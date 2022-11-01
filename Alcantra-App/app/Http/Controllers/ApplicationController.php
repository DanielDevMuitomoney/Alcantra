<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApplicationController extends Controller
{
    //
    public function ShowHome(){
        $posts = DB::table('posts')
        ->join('users','posts.fk_user','=','users.id')
        ->get();
        return view('internal.home',[
            "posts" => $posts
        ]);
    }
}
