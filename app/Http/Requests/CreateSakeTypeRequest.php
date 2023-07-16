<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateSakeTypeRequest extends FormRequest
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
            "SKT_name" => ["required"],
        ];
    }

    /**
     * 属性名
     */
    public function attributes()
    {
        return [
            "SKT_name" => '酒分類名',
        ];
    }

    /**
     * エラーメッセージ
     */
    public function messages()
    {
        return [
            '*.required' => ':attributeは必須項目です。',
        ];
    }
}
