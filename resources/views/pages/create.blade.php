@extends("layouts.app")
@section("content")
<h1>Blade for creating blogs</h1>
<form action="/store" method="post">
@csrf
<label for="title">Title</label>
<div class="form-group">
<input type="text" class="form-control" required name="title">
</div>
<div class="form-group">
<label for="content">CONTENT</label>
<textarea name="content" id="" cols="30"  required class="form-control" rows="10"></textarea>

</div>
<div class="form-group">
    <button class="btn btn-outline-primary">ADD BLOG POST</button>
</div>
@endsection("content")
</form>