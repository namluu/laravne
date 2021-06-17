<?php

namespace App\Http\Controllers\Admin\Cms;
use App\Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::get();
        return view('admin.cms.post.index', compact('posts'));
    }

    public function create()
    {
        echo 'create';
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function detroy()
    {

    }
}
