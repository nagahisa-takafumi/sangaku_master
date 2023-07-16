<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCampRequest extends FormRequest
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
            "C_name" => ["required"],
        ];
    }

    /**
     * 属性名
     */
    public function attributes()
    {
        return [
            "C_name" => '陣名',
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
