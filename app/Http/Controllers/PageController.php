<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Category;

class PageController extends BaseController
{

    public $category;

    public function __construct()
    {
        $this->category = new Category;
    }

    public function home()
    {
        $menu = $this->category->getMenu();
        return view('page.home', compact('menu'));
    }
}
