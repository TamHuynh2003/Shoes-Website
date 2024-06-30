<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAdminsRequest extends FormRequest
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
            'username' => 'required|string|max:255|unique:admins',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|same:password',

            'fullname' => 'required|string|max:255|min:10',
            'email' => 'required|string|email|max:255|unique:admins',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ":attribute bắt buộc phải nhập",
            'string' => ":attribute không phải là chuỗi",

            'email' => ":attribute không đúng định dạng",
            'unique' => ":attribute đã được sử dụng",

            'min' => ":attribute không được nhỏ hơn :min kí tự",
            'max' => ":attribute không được lớn hơn :max kí tự",
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'tài Khoản ',
            'password' => 'mật khẩu',
            'confirm_password' => 'xác nhận lại mật khẩu',
            'email' => 'email của bạn ',
            'fullname' => 'họ và tên của bạn ',
        ];
    }
}
