<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboadrController extends Controller
{
    //
    public function dashboard() {
      return view('admin.dashboard', [
        'categories' => Category::lastCategories(5)
      ]);
    }
}
