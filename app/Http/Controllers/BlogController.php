<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    //
    public function index()
    {
        $data = blog::all();
        $category = categories::all();
        return view('pages.backend.blog.index', compact('data', 'category'));
    }

    public function show($id)
    {
        $data = blog::findOrFail($id);
        $category = categories::all();
        return view('pages.backend.blog.blog_desc', compact('data', 'category'));
    }

    public function create()
    {
        $category = categories::all();
        return view('pages.backend.blog.create', compact('category'));
    }

    public function store(Request $request)
    {
        // checking if the title exists
        $existingBlog = blog::where('title', $request->input('title'))->first();
        if ($existingBlog) {
            return redirect()->back()->with('error', 'The title already exists. Please choose a different title');
        }

        $data = new blog();
        $data->title = $request->input('title');
        $data->content = $request->input('content');
        $data->category_id = $request->input('category_id');

        $data->save();
        return redirect()->route('blog.index')->with('add', 'New Blog Added Successfully');
    }

    public function edit($id)
    {
        $data = blog::findOrFail($id);
        $category = categories::all();
        return view('pages.backend.blog.edit', compact('data', 'category'));
    }

    public function update(Request $request, $id)
    {
        $data = blog::findOrFail($id);
        // checking if the title exists
        $existingBlog = blog::where('title', $request->input('title'))->first();
        if ($existingBlog) {
            return redirect()->back()->with('error', 'The title already exists. Please choose a different title');
        }
        $data->title = $request->get('title');
        $data->content = $request->get('content');
        $data->category_id = $request->get('category_id');
        
        $data->update();
        return redirect()->route('blog.index')->with('update', 'Blog Updated Successfully');
    }

    public function delete($id)
    {
        $data = blog::findOrFail($id);

        $data->delete();
        return redirect()->route('blog.index')->with('delete', 'Blog Deleted Successfully');
    }

    public function filterByCategory($categorySlug)
    {
        $category = categories::where('slug', $categorySlug)->firstOrFail();
        $blogs = Blog::where('category_id', $category->id)->get();

        return view('pages.backend.blog.index', ['blogs' => $blogs]);
    }
}
