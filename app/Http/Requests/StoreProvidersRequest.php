<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProvidersRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',

            'email' => 'required|email|max:255',
            'phone_number' => 'required|regex:/^0[0-9]{9,10}$/',

            'descriptions' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ":attribute bắt buộc phải nhập",
            'string' => ":attribute phải là chuỗi",

            'min' => ":attribute không được nhỏ hơn :min kí tự",
            'max' => ":attribute không được lớn hơn :min kí tự",

            'email' => ":attribute không hợp lệ",
            'regex' => ":attribute không hợp lệ",

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên',
            'address' => 'Địa chỉ',

            'email' => 'Email',
            'phone_number' => 'Số điện thoại',

            'descriptions' => 'Mô tả',
        ];
    }
}
