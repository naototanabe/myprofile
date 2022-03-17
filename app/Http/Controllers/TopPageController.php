<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopPageController extends Controller
{
    public function index (Request $request){
        $items = DB::table('works')->get();
        return view ('profile.index', ['items' => $items]); 
    }
}
