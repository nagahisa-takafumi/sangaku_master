<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePlaceRequest;
use App\Models\Camp;
use App\Models\Place;
use Exception;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * 店舗情報一覧
     */
    function list (){
        $places = Place::paginate(10);
        return view("pages.place.list",compact("places"));
    }

    /**
     * 店舗情報追加画面
     */
    function goCreate (){
        $camps = Camp::all();
        return view("pages.place.create",compact("camps"));
    }

    /**
     * 店舗情報追加処理
     */
    function create (CreatePlaceRequest $request){
        $datas = $request->only(["P_which","P_number","P_camp_id"]);
        try{
            $result = Place::create($datas);
            return redirect(route('place.list'))->with([
                'flashMsg' => '店舗情報を新規追加しました',
            ]);
        }
        catch(Exception $e){
            dump("エラーが発生しました");
        }
    }

}
