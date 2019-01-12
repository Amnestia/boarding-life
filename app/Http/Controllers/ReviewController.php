<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public static function getReviews($id)
    {
        $review=Review:://join('locations', 'locations.id', '=', 'reviews.location_id')->
        where('location_id','=',$id)->whereNull('reviews.deleted_at')->get();
        return $review;
    }

    public function newReview(Request $req, $id)
    {
        $review=new Review();
        $review->user_id=auth()->id();
        $review->location_id=$id;
        $review->review=$req->review;
        $review->status=$req->status;
        $review->save();
        return redirect()->back();
    }

}
