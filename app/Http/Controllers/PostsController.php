<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;

class PostsController extends Controller

{
    private $columns = ['posttitle','author','description','published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $posts= Post::get();
     return view('postsshow',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    //  $posts = new post();
    //  $posts->posttitle = $request->posttitle;
    //   $posts->author = $request->author;
    //  $posts->description = $request->description;
    //  if(isset($request->published)){
    //     $posts->published = 1;
    //  }else{
    //     $posts->published = 0;
    //  }
    //  $posts->save();
    //  return 'Data added successfully';
    $data = $request->only($this->columns);
    $data['published'] = isset($request->published);
    Post::create($data);
    return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post= post::findOrFail($id);
        return view('updatepost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $data = $request->only($this->columns);
    $data['published'] = isset($request->published);
    Post::where('id',$id)->update($data);
    return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
