<?php

namespace App\Http\Controllers;

use App\LocationType;
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

    public function getInsertPage(){
        return view('insert')->with('types',LocationTypeController::getType());
    }

    public function getReview($id)
    {
        return view('review')->with('review',ReviewController::getReviews($id));
    }
}
