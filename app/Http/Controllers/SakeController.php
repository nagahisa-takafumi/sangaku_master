<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSakeRequest;
use App\Models\Brewery;
use App\Models\Sake;
use App\Models\SakeType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SakeController extends Controller
{
    /**
     * 酒一覧画面
     */
    function list (){
        $sakes = Sake::paginate(10);
        return view("pages.sake.list",compact("sakes"));
    }

    /**
     * 酒追加画面
     */
    function goCreate (){
        $breweries = Brewery::all();
        $sakeTypes = SakeType::all();
        return view("pages.sake.create",compact("breweries","sakeTypes"));
    }

    /**
     * 酒追加処理
     */
    function create (CreateSakeRequest $request){
        //アップロードされたファイル
        $file = $request->file("SK_img");
        //拡張子を取得
        $ext = $file->extension();
        //主キーの最大値
        $maxId = Sake::max("SK_id");
        $maxId++;
        dump($request->input());
        $datas = $request->only(["SK_name","SK_price","SK_brewery_id","SK_type_id","SK_alcohol","SK_img","SK_tasting","SK_description","SK_online_site_url"]);
        $datas["SK_tasting"] = (int)$datas["SK_tasting"];
        $datas["SK_img_file_path"] = $maxId . "." . $ext;
        $datas["SK_delete_flag"] = 0;
        try{
            $result = Sake::create($datas);
            $request->file("SK_img")->storeAs('img/sake/', $maxId . "." . $ext , 'public_uploads');;
            return redirect(route('sake.list'))->with([
                'flashMsg' => '酒情報を新規追加しました',
            ]);
        }
        catch(Exception $e){
            Log::info($e);
            dump("エラーが発生しました");
        }
    }
}
