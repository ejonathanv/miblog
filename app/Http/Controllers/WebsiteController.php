<?php
namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;
class WebsiteController extends Controller
{
    public function index(){
        $coverPage = Page::where('title', 'Cover')->first();
        return view('website.index', compact('coverPage'));
    }

    public function about(){
        $aboutPage = Page::where('title', 'Acerca de mi')->first();
        return view('website.about', compact('aboutPage'));
    }

    public function blog(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('website.blog', compact('posts'));
    }
    public function post(Post $post){
        return view('website.post', compact('post'));
    }
}