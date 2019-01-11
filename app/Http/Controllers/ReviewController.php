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

}
