<?php

namespace App\Http\Controllers;

use App\Models\Sake;
use Illuminate\Http\Request;

class SakeController extends Controller
{
    /**
     * 酒タイプ一覧
     */
    function list (){
        $sakes = Sake::paginate(10);
        return view("pages.sake.list",compact("sakes"));
    }
}
