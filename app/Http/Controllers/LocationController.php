<?php

namespace App\Http\Controllers;

use App\Location;
use App\Review;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function searchLocation(Request $request,$page)
    {
        $word=$request->search;
        $locations=Location::whereNull('deleted_at')->where(function($query) use ($word){
           $query->orWhere('name','like',"%".$word."%")
                 ->orWhere('address','like','%'.$word.'%');
        })->whereHas('review',function($query){
        $query->selectRaw('SUM(reviews.status) AS status')->orderBy('status','desc');
        })->get();
        $locations->each(function($found){
            $found['negative']=Review::where('location_id','=',$found->id)->where('status','=',-1)->sum('status');
            $found['positive']=Review::where('location_id','=',$found->id)->where('status','=',1)->sum('status');
            $found['count']=$found['negative']+$found['positive'];
            if($found['negative']<0)
            $found['negative']*=-1;
        });
        $totalPage=ceil(sizeof($locations)/3);
        if($totalPage<$page)
            return redirect()->back();
        $ret=$locations->sortByDesc('count')->forPage($page,3);
        $ret['totalPage']=$totalPage;
        $ret['currPage']=$page;
        return view('/search')->with('results',$ret);
    }

    public function newLocation(Request $request)
    {

    }
}
