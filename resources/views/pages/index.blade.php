@extends("layouts.app")
@section("content")
@forelse($datapassed as $posts)
<div class="row  mb-3">
    <div class="col-md-12 justify-content-center">
        
            
            {{$posts->title}}
   
    </div>
    <div class="container">
             {{$posts->content}}
    </div>
</div>
@empty
@endforelse

@endsection("content")