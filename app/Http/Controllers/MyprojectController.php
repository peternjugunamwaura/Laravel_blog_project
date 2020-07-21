<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MyprojectController extends Controller
{
    public function index()
    {
        $datapassed = \App\Myproject::all();
        return view("pages.index",compact("datapassed"));
    }
    public function create()
    {
        return view("pages.create");
    }
    public function store()
    {
      $data = request()->validate([
          "title"=>"required",
          "content"=>"required"
      ]);
      \App\Myproject::create($data);
      return redirect("/pageone");
    }
    public function show(\App\Myproject $posts)
    {
        return view("pages.show",compact("posts"));
    }
    public function edit(\App\Myproject $posts)
    {
         return view("pages.edit",compact("posts"));
    }
    public function update(\App\Myproject $post)
    {
        $data = request()->validate([
               "title"=>"required",
               "content"=>"required",
        ]);
        $post->update($data);
        return redirect("pageone");
    }
    public function delete(\App\Myproject $post)
    {
        $post->delete();
        return redirect("pageone");

    }
}
