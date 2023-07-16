<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBreweryRequest;
use App\Models\Brewery;
use App\Models\Camp;
use App\Models\Place;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BreweryController extends Controller
{
    /**
     * 酒タイプ一覧
     */
    function list (){
        $breweries = Brewery::paginate(10);
        return view("pages.brewery.list",compact("breweries"));
    }

    /**
     * 酒造所情報追加画面
     */
    function goCreate (){
        $places = Place::all();
        return view("pages.brewery.create",compact("places"));
    }

    /**
     * 陣情報追加処理
     */
    function create (CreateBreweryRequest $request){
        //アップロードされたファイル
        $file = $request->file("B_img_file_path");
        //拡張子を取得
        $ext = $file->extension();
        //主キーの最大値
        $maxId = Brewery::max("B_id");
        $maxId++;
        $datas = $request->only(["B_name","B_place_id","B_description","B_mail","B_tel","B_address","B_url",]);
        $datas["B_img_file_path"] = $maxId . "." . $ext;
        $datas["B_delete_flag"] = 0;
        try{
            $result = Brewery::create($datas);
            $request->file("B_img_file_path")->storeAs('img/brewery/', $maxId . "." . $ext , 'public_uploads');;
            return redirect(route('camp.list'))->with([
                'flashMsg' => '酒造所情報を新規追加しました',
            ]);
        }
        catch(Exception $e){
            Log::info($e);
            dump("エラーが発生しました");
        }
    }
}
