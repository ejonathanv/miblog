<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->cover = $this->uploadCoverImg($request, $post);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        $post->slug = \Str::slug($request->title);
        $post->save();

        $tags = $this->addTagsToPost($request, $post);

        return redirect()->route('dashboard')->with('msg', 'Se ha publicado el artículo exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        
        $post->cover = $this->uploadCoverImg($request, $post);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->slug = \Str::slug($request->title);
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;

        $post->save();

        $tags = $this->addTagsToPost($request, $post);

        return redirect()->back()->with('msg', 'La publicación ha sido actualizada.');

    }

    public function addTagsToPost($request, $post){
        $post->categories()->delete();
        $tags = explode(', ', $request->tags);
        foreach($tags as $tag){
            $category = Category::firstOrCreate(['name' => $tag]);
            $postCategory = new PostCategory();
            $postCategory->post_id = $post->id;
            $postCategory->category_id = $category->id;
            $postCategory->save();
        }
    }

    public function uploadCoverImg($request, $post){

        if(!$request->cover){
            return $post->cover;
        }

        $avatar = $request->file('cover');
        $name = $post->slug . '-' . hexdec(uniqid());
        $ext = $avatar->getClientOriginalExtension();
        $root = public_path() . '/img/posts';
        $fileName = "{$name}.{$ext}";
        $avatar->move($root, $fileName);

        return $fileName;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
