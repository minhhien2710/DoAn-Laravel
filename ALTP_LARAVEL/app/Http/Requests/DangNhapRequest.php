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
            'mat_khau' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'mat_khau.min' => 'Mật khẩu tối thiểu 4 ký tự.'
        ];
    }
}
