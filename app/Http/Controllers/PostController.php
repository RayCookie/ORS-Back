<?php

namespace App\Http\Controllers;
use App\Blog;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::all();
        return view('post_list',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('post_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'auteur' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        $article = new Blog();
        $article->title = $request->get('title');
        $article->body = $request->get('body');
        $article->auteur = $request->get('auteur');
        $article->image = $input['imagename'];
        $article->save();
        return redirect()->route('all_posts')->with('status', 'New article has been successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post_id)
    {
        $post = Blog::find($post_id);
        return view('post_edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
        $post = Blog::find($post_id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->auteur = $request->get('auteur');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['imagename']);
            $post->image = $input['imagename'];
        }
        $post->save();
        return redirect()->route('all_posts')->with('status', 'Post has been successfully updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $post_id->delete();
        return redirect()->route('all_posts')->with('status', 'Post has been successfully deleted!');
    }
}
