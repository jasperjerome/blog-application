<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = blog::paginate(4);
        $category = categories::all();
        return view('pages.backend.dashboard', compact('data', 'category'));
    }
}
