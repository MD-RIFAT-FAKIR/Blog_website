<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class BackendController extends Controller
{
    //add category
    public function addCategory() {
        return view('dashboard.add_category');
    }

    //store-category
    public function storeCategory(Request $request) {

        $request->validate([
            'category' => 'required'
        ]);

        $category          = new Category;
        $category->category = $request->category;
        $count             = Category::where('slug', 'like', '%'.Str::slug($request->category).'%')->count();

        if( $count > 0 ) {
            $count++;

            $category->slug = Str::slug($request->category)."-".$count;
        }else{
            $category->slug = Str::slug($request->category);
        }

        $category->save();

        return back()->with('success', 'Category Added Successfully .!');
    }
}
