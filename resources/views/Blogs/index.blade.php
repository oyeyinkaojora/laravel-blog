@extends('layouts.master')

@section('content')
<br>
<br>

     <div class="row">
            @foreach ($blogs as $blog)
        <div class="col-md-6">

            <div class="card">
                  
                <div class="card-header">
                    <a href="{{route('show_blog_path')}}">{{$blog->title}}</a>
                </div>

                <div class="card-body">
                    <a href="">{{$blog->content}}</a>

                    <p class="lead">
                        posted

                        <br>
                        <br>
                        <br>
                        
                        {{$blog->created_at->diffForHumans()}}
                    </p>
                </div>

            </div>

        </div>
            @endforeach
     </div>

        
     
     
    
         
        
     
@endsection

