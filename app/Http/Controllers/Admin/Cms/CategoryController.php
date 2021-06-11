<?php

namespace App\Http\Controllers\Admin\Cms;
use App\Models\Category;

class CategoryController
{
    public function index()
    {
        $categories = Category::get();
        return view('vne.admin.cms.category.index', compact('categories'));
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
