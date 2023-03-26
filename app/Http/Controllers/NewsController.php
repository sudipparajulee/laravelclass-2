<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        // foreach($news as $new)
        // {
        //     $cat = Category::find($new->category_id);
        //     $new->categoryname = $cat->name;
        // }

        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $data = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'photopath' => 'required',
            'news_date' => 'required'
        ]);

        if($request->file('photopath'))
        {
            $photo = $request->file('photopath');
            $filename = $photo->getClientOriginalName();
            $photopath = time().'_'.$filename;
            $photo->move(public_path('/images/news/'),$photopath);
            $data['photopath'] = $photopath;
        }

        News::create($data);
        return redirect(route('news.index'))->with('success','News Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
