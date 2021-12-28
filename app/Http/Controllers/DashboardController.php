<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function dashboard(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard.index', compact('posts'));
    }
}
