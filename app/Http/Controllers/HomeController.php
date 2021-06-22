<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Poema;

class HomeController extends Controller
{
    //
    public function home() {
        $poemas=Poema::all();
        $categories=Category::all();
        return view('home', [
            'poemas'=>$poemas,
            'categories'=>$categories
        ]);
    }

    public function singleCategory($id) {
        $category=Category::where('id', $id)->first();

        $poemas = Poema::where('category_id', $id)->get();
        return view('singleCategory', [
            'category'=>$category,
            'poemas'=>$poemas
        ]);
    }

    public function x($id) {
        $category
    }
}
