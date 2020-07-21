@extends("layouts.app")
@section("content")
<h1>Blade for creating blogs</h1>
<form action="/posts/{{$posts->id}}" method="post">
@method("patch");
@csrf
<label for="title">Title</label>
<div class="form-group">
<input type="text" class="form-control" required name="title" value="{{ $posts->title}}">
</div>
<div class="form-group">
<label for="content">CONTENT</label>

    <div class="container-fluid">
    <textarea name="content" id="" cols="30"  required class="form-control" rows="10" >
    {{ $posts->content}}
    </textarea>
    </div>
   
</div>
<div class="form-group">
    <button class="btn btn-outline-primary">SAVE EDITED BLOGS</button>
</div>
@endsection("content")
</form>