<?php

namespace App\Http\Controllers;

use App\LocationType;
use Illuminate\Http\Request;

class LocationTypeController extends Controller
{
    public static function getType()
    {
        return LocationType::whereNull('deleted_at')->get();
    }
}
