<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'priority' => 'required|numeric'
        ]); 
        

        Category::create($data);
        
        return redirect(route('category.index'))->with('success','Category Added Successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'priority' => 'required|numeric'
        ]);

        $category = Category::find($id);
        $category->update($data);

        return redirect(route('category.index'))->with('success','Data Updated Successfully');
    }

    public function delete(Request $request)
    {
        $category = Category::find($request->dataid);
        $category->delete();
        return redirect(route('category.index'))->with('success','Data Deleted Successfully');
    }
}
