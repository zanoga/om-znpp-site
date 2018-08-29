<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboadrController extends Controller
{
    //
    public function dashboard() {
      return view('admin.dashboard');
    }
}
