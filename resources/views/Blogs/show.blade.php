@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-md-12"> 

            <br>

            <h3> {{$blog->title}} </h3>

            <p class="lead">
                {{$blog->content}}
            </p>

            <a href="{{route('edit_blog_path',['blog' => $blog->id])}}" class="btn btn-outline-info">Edit</a>

        </div>

        <a href="{{route('blogs_path')}}" class="btn btn-outline-secondary">BacK</a>
        
        {{-- <a href="{{route('delete_blog_path'), ['blog'=>$blog->id]}}" class="btn btn-outline-secondary">
                <button type="button" value="delete" class="btn btn-outline-danger">
                    Delete
                 </button>
        </a> --}}


        {{-- <form action=" {{route('delete_blog_path'), ['blog'=>$blog->id]}} " method="post">
            @csrf

            {{method_field('delete')}}

            <button type="submit" value="delete" class="btn btn-outline-danger">
                Delete
            </button>
        </form> --}}

        
    </div>  

@endsection