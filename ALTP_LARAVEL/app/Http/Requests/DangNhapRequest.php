<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
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
            'ten_dang_nhap' => 'required',
            'mat_khau' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Tài khoản không được để trống.',
            'mat_khau.required' => 'Mật khẩu không được để trống.'
        ];
    }
}
