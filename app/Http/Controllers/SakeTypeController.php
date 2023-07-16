<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSakeTypeRequest;
use App\Models\SakeType;
use Exception;
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

    /**
     * 酒タイプ追加画面
     */
    function goCreate (){
        return view("pages.sake_type.create");
    }

    /**
     * 酒タイプ追加処理
     */
    function create (CreateSakeTypeRequest $request){
        $datas = $request->only(["SKT_name"]);
        try{
            $result = SakeType::create($datas);
            return redirect(route('sake_type.list'))->with([
                'flashMsg' => '酒タイプを新規追加しました',
            ]);
        }
        catch(Exception $e){
            dump("エラーが発生しました");
        }
    }
}
