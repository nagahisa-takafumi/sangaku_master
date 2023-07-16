<?php

namespace App\Http\Requests;

use App\Rules\selectRule;
use Illuminate\Foundation\Http\FormRequest;

class CreatePlaceRequest extends FormRequest
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
            "P_which" => ["required",new selectRule],
            "P_number" => ["required","integer"],
            "P_camp_id" => ["required",new selectRule,"integer"],
        ];
    }

    /**
     * 属性名
     */
    public function attributes()
    {
        return [
            "P_which" => "店区分",
            "P_number" => "店番号",
            "P_camp_id" => "陣",
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
        ];
    }
}
