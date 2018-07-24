<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategories(Request $request)
    {

        return view('admin.home.categories.add-categories');
    }


    public function storeCategories(Request $request)
    {

        $categories= new Categories();
        $categories->category_name= $request->category_name;
        $categories->category_details=$request->category_details;
        $categories->save();
        return back()->with('message', 'category stored successfully!');
    }
    public function manageCategories()
    {

        $categories= Categories::all();
        return view('admin.home.categories.manage-categories',[
           'categories'=>$categories
        ]);

    }
}
