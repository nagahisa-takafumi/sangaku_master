<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;

class BreweryController extends Controller
{
    /**
     * 酒タイプ一覧
     */
    function list (){
        $breweries = Brewery::paginate(10);
        return view("pages.brewery.list",compact("breweries"));
    }
}
