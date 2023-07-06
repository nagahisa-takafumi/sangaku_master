<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use Illuminate\Http\Request;

class CampController extends Controller
{
    /**
     * 酒タイプ一覧
     */
    function list (){
        $camps = Camp::paginate(10);
        return view("pages.camp.list",compact("camps"));
    }
}
