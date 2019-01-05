<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome() {
        return view('home');
    }
    
    public function getCollection() {
        return view ('collection');
    }

    public function getSearchPage() {
        return view('search');
    }
}
