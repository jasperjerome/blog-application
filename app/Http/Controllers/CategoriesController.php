<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //

    public function index() {
        $data = categories::all();

        return view('pages.backend.categories.index', compact('data'));
    }

    public function create() {
        return view('pages.backend.categories.create');
    }

    public function store(Request $request) {
        $data =new categories();
        $data->name =$request->get('name');
        $data->slug =$request->get('slug');

        $data->save();
        return redirect()->route('category.index')->with('add', 'New Category Added Successfully');
    }

    public function edit($id) {
        $data = categories::findOrFail($id);

        return view('pages.backend.categories.edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = categories::findOrFail($id);

        $data->name =$request->get('name');
        $data->slug =$request->get('slug');
        $data->update();
        return redirect()->route('category.index')->with('update', 'Category Updated Successfully');
    }

    public function delete($id) {
        $data = categories::findOrFail($id);

        $data->delete();
        return redirect()->route('category.index')->with('delete', 'Category Deleted Successfully');
    }
}
