<?php

namespace App\Http\Controllers\Admin\Cms;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController
{
    public function index()
    {
        $posts = Post::get();
        return view('admin.cms.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.cms.post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'enabled'=>'required',
            'category_id'=>'required',
            'content' => 'content'
        ]);
        $post = new Post([
            'name' => $request->input('name'),
            'alias' => Str::slug($request->input('name')),
            'enabled' => $request->input('enabled'),
            'content' => $request->input('content'),
            'user_id' => Auth::id(),
            'category_id' => $request->input('category_id')
        ]);
        $post->save();
        return redirect('admin/cms/posts/'.$post->id)->with('success','Saved successfully!');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.cms.post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.cms.post.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'=>'required',
            'enabled'=>'required',
            'category_id'=>'required',
            'content' => 'required'
        ]);
        $post = Post::find($id);
        $post->name = $request->input('name');
        $post->alias = Str::slug($request->input('name'));
        $post->enabled = $request->input('enabled');
        $post->user_id = Auth::id();
        $post->category_id = $request->input('category_id');
        $post->content = $request->input('content');
        $post->save();
        return redirect('admin/cms/posts/'.$id)->with('success','Saved successfully!');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        try {
            $post->delete();
            return redirect('admin/cms/posts')->with('success', 'Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('admin/cms/posts')->with('error', 'Deleted failed! '.$e->getMessage());
        }
    }
}
