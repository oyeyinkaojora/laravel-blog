<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    //index page
    public function index(){
        $blogs=Blog::all();

        //the other parametr is pointint to the blog variable
        return view('Blogs.index',['blogs'=>$blogs]);
    }

    //responsible for showing the post page
    public function show($id){

        $blogs=Blog::find($id);

        return view('Blogs.show',['blog' => $blogs]);
    }

    public function edit($id){

        $blogs=Blog::find($id);

        return view('Blogs.edit',['blog'=>$blog]);
    }

    public function update(Request $request,$id){
        
        $blog=Blog::find($id);

        $blog->title=$request->title;
        $blog->content=$request->content;

        $blog->update();

        return redirect()->route('blogs_path',['blog'=>$blog]);


    }

    public function destroy(){
        
        $blog=Blog::find($id);

        $blog->delete();

        return redirect()->route('blogs_path',['blog'=>$blog->id]);
    }

    public function create(){
        
        return view('Blogs.create');
    }

    public function store(Request $request){

        $blog= new Blog;

        $blog->title=$request->title;
        $blog->content=$request->content;

        $blog->save();

        return redirect()->route('blogs_path');
        
    }
}
