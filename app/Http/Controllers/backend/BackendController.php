<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //add category
    public function addCategory() {
        return view('dashboard.add_category');
    }
}
