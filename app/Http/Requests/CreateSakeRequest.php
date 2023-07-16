<?php

namespace App\Http\Requests;

use App\Rules\selectRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateSakeRequest extends FormRequest
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
            "SK_name" => ["required"],
            "SK_price" => ["required","integer"],
            "SK_brewery_id" => ["required",new selectRule,"integer"],
            "SK_type_id" => ["required",new selectRule,"integer"],
            "SK_alcohol" => ["required","integer"],
            "SK_img" => ["required","image","mimes:jpeg,png,jpg"],
            "SK_tasting" => ["integer"],
            "SK_description" => ["required"],
            "SK_online_site_url" => ["required"],
        ];
    }

    /**
     * 属性名
     */
    public function attributes()
    {
        return [
            "SK_name" => "酒名",
            "SK_price" => "価格",
            "SK_brewery_id" => "酒造所",
            "SK_type_id" => "酒分類",
            "SK_alcohol" => "アルコール度数",
            "SK_img" => "画像",
            "SK_tasting" => "試飲可能・不可能",
            "SK_description" => "説明",
            "SK_online_site_url" => "オンラインサイトURL",
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
