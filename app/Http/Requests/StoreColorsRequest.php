<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreColorsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:10|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ":attribute bắt buộc phải nhập",
            'string' => ":attribute phải là chuỗi",

            'min' => ":attribute không được nhỏ hơn :min kí tự",
            'max' => ":attribute không được lớn hơn :min kí tự",
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Màu Sắc',
        ];
    }
}
