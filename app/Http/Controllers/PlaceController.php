<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * 酒タイプ一覧
     */
    function list (){
        $places = Place::paginate(10);
        return view("pages.place.list",compact("places"));
    }
}
