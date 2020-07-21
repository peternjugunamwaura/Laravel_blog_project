@extends("layouts.app")
<br>
@section("content")
<div class="row  mx-5 justify-content-center">
<a href="/posts/{{$posts->id}}/edit"><button class="btn btn-success my-2">EDIT</button></a>
       
    <div class="col-12 justify-content-center">
        <h2>{{$posts->title}}</h2><br>
        <div class="container">
            {{$posts->content}}
        </div>
        
       
       
        <form action="/posts/{{$posts->id}}" method="post">
        @method('DELETE')
        @csrf
       <button class="btn btn-primary my-3">DELETE</button>
       </form>
    </div>
</div>

@endsection("content")