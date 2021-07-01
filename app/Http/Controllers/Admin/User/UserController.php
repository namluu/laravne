<?php

namespace App\Http\Controllers\Admin\User;
use App\Models\User;
use Illuminate\Http\Request;

class UserController
{
    public function index()
    {
        $users = User::get();
        return view('admin.user.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'require',
            'password'=>'password'
        ]);
        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        $user->save();
        return redirect('admin/user/users/'.$user->id)->with('success','Saved successfully!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.user.show', compact('user'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.cms.category.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->alias = Str::slug($request->input('name'));
        $category->enabled = $request->input('enabled');
        $category->is_menu = $request->input('is_menu');
        $category->save();
        return redirect('admin/cms/categories/'.$id)->with('success','Saved successfully!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        try {
            $category->delete();
            return redirect('admin/cms/categories')->with('success', 'Deleted successfully!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('admin/cms/categories')->with('error', 'Deleted failed! Please remove posts inside category first');
        } catch (\Exception $e) {
            return redirect('admin/cms/categories')->with('error', 'Deleted failed! '.$e->getMessage());
        }
    }
}
