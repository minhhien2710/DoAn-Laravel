<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoiCreditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'ten_goi'=>'required|min:2',
           'credit'=>'required|numeric|between:0,1000',
           'so_tien'=>'required|numeric|min:1000'
        ];
    }
    public function messages()
    {
        return[
            'ten_goi.required'=>'Tên gói không được rỗng',
            'ten_goi.min'=>'Tên gói phải lớn hơn 2 kí tự',
            'credit.required'=>'Credit không được rỗng',
            'credit.numeric'=>'Credit phải là số',
            'credit.between'=>'Credit trong khoảng 0-1000',
            'so_tien.required'=>'Số tiền không được rỗng',
            'so_tien.numeric'=>'Số tiền phải là số',
            'so_tien.min'=>'Số tiền phải lớn hơn 1000'

        ];
    }
}
