<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminsRequest extends FormRequest
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
    // public function rules(): array
    // {
    //     return [
    //         'fullname' => 'required|string|max:255',
    //         'email' => 'required|email|unique:admins|max:255',

    //         'address' => 'required|string|max:255',
    //         'phone_number' => 'required|unique|regex:/^0[0-9]{9,10}$/',

    //         'username' => 'required|string|unique|max:255|min:5',
    //         'password' => 'required|string|min:3',

    //         'birth_date' => 'required|date',
    //         // 'image' => 'required|image|max:900000',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:900000',

    //         'salary' => 'required|numeric|min:100',

    //     ];
    // }

    public function rules(): array
    {
        return [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:admins|max:255',

            'address' => 'required|string|max:255',
            'phone_number' => 'required|size:10|unique:admins,phone_number|regex:/^0[0-9]{9,10}$/',

            'username' => 'required|string|unique:admins,username|max:255|min:5',
            'password' => 'required|string|min:3',

            'birth_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:900000',

            'salary' => 'required|numeric|min:100',
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

            'integer' => ":attribute phải là số",
            'numeric' => ":attribute không hợp lệ",

            'date' => ":attribute không hợp lệ",
            'image' => ":attribute không hợp lệ",

            'unique' => ":attribute không được trùng nhau",

        ];
    }

    public function attributes()
    {
        return [
            'fullname' => 'Họ tên',
            'email' => 'Email',

            'phone_number' => 'Số điện thoại',
            'address' => 'Địa chỉ',

            'username' => 'Tên tài khoản',
            'password' => 'Mật khẩu',

            'birth_date' => 'Ngày sinh',
            'image' => 'Hình ảnh',

            'salary' => 'Lương',
        ];
    }
}
