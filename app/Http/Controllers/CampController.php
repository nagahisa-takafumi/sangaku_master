<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCampRequest;
use App\Models\Camp;
use Exception;
use Illuminate\Http\Request;

class CampController extends Controller
{
    /**
     * 陣一覧
     */
    function list (){
        $camps = Camp::paginate(10);
        return view("pages.camp.list",compact("camps"));
    }

    /**
     * 陣情報追加画面
     */
    function goCreate (){
        return view("pages.camp.create");
    }

    /**
     * 陣情報追加処理
     */
    function create (CreateCampRequest $request){
        $datas = $request->only(["C_name"]);
        try{
            $result = Camp::create($datas);
            return redirect(route('camp.list'))->with([
                'flashMsg' => '陣情報を新規追加しました',
            ]);
        }
        catch(Exception $e){
            dump("エラーが発生しました");
        }
    }
}
