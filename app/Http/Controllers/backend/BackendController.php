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
    }//end store-category

    //all category show
    public function allCategory() {
        $categories = Category::get();

        return view('dashboard.all_category', compact('categories'));
    }//

    //edit category
    public function editCategory($id) {
        $category = Category::findOrFail($id);

        return view('dashboard.edit_category', compact('category'));
    }

    //update category
    public function updateCategory(Request $request) {

        $request->validate([
            'category' => 'required'
        ]);

        $updateCategory          = new Category;
        $updateCategory->category = $request->category;

        $count = Category::where('slug', 'like', '%'.Str::slug($request->category).'%')->count();

        if( $count > 0 ) {
            $count++;

            $updateCategory->slug = Str::slug($request->category)."-".$count;
        }else{
            $updateCategory->slug = Str::slug($request->category);
        }

        $updateCategory->save();

        return redirect('/all-category')->with('success', 'Category Update Successfully');

    }
}
