<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poema;

class NaruController extends Controller
{
    //
    public function naru() {
        $poemas=Poema::where('category_id','1')->get();
        return view('naru', [
            'poemas'=>$poemas
        ]);
    }
}
