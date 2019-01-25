@extends('layouts.master')

@section('content')

    <form action=" {{route('update_blog_path',['blog' => $blog->id])}} " method="post">
        @csrf

        @method('PUT')
     
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="text" class="form-control" value=" {{$blog->title}}">
        </div>
     
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" rows="10" class="form-control" value="{{$blog->content}}"></textarea>
       </div> 
     
       <div class="form-group">
           <button type="submit" class="btn btn-primary">Edit Blog Post</button>
       </div>
       
    </form> 

@endsection