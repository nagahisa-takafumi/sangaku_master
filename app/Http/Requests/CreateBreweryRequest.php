<?php

namespace App\Http\Requests;

use App\Rules\selectRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateBreweryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * バリデーション
     */
    public function rules(): array
    {
        return [
            "B_name" => ["required"],
            "B_place_id" => ["required",new selectRule,"integer"],
            "B_description" => ["required"],
            "B_mail" => ["required","email"],
            "B_tel" => ["required"],
            "B_address" => ["required"],
            "B_img_file_path" => ["required","image","mimes:jpeg,png,jpg"],
            "B_url" => ["required"],
        ];
    }

    /**
     * 属性名
     */
    public function attributes()
    {
        return [
            "B_name" => "酒造所名",
            "B_place_id" => "店舗情報",
            "B_description" => "店舗説明",
            "B_mail" => "メールアドレス",
            "B_tel" => "電話番号",
            "B_address" => "住所",
            "B_img_file_path" => "画像",
            "B_url" => "URL",
        ];
    }

    /**
     * エラーメッセージ
     */
    public function messages()
    {
        return [
            '*.required' => ':attributeは必須項目です。',
            '*.integer' => ':attributeは数値で入力してください。',
            '*.email' => ':attributeには正しいメールアドレスを入力してください',
            '*.image' => ':attributeは画像形式のファイルをアップロードしてください',
            '*.mimes' => ':attributeには対応するファイル形式でアップロードしてください',
        ];
    }
}
