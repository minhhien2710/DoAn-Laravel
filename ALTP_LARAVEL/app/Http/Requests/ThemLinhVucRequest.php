<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemLinhVucRequest extends FormRequest
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
            'ten_linh_vuc' => 'required|min:3|unique:linh_vuc'
        ];
    }

    public function messages()
    {
        return [
            'ten_linh_vuc.unique' => 'Lỗi ! Tên lĩnh vực đã tồn tại.',
            'ten_linh_vuc.min' => 'Lỗi ! Tên lĩnh vực phải ít nhất 3 kí tự.',
            'ten_linh_vuc.required' => 'Lỗi ! Tên lĩnh vực không được rỗng.'
        ];
    }
}
