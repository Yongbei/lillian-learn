<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_name' => 'required|max:5|min:3',
            'company_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => '產品名稱必填啦～還不快填！',
            'product_name.max' => '你寫太長了啦！最多只能輸入五個字',
            'product_name.min' => '你超短～請輸入三個字以上',
            'company_id.required' => '請選擇公司啦！',
        ];
    }
}
