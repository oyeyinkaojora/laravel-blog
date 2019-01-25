@extends('layouts.master')

@section('content')

    <br>
    <br>
    <br>

    <form action=" {{route('store_blog_path')}} " method="post">
        @csrf
     
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
     
        <div class="form-group">
             <label for="Content">content</label>
             <textarea name="content" rows="10" class="form-control"></textarea>
       </div> 
     
       <div class="form-group">
           <button type="submit" class="btn btn-outline-primary">Submit Blog Post</button>
       </div>
       
    </form> 

@endsection

