<?php

namespace App\Http\Controllers;

use App\Models\SakeType;
use Illuminate\Http\Request;

class SakeTypeController extends Controller
{
    /**
     * 酒タイプ一覧
     */
    function list (){
        $sakeTypes = SakeType::paginate(10);
        return view("pages.sake_type.list",compact("sakeTypes"));
    }
}
