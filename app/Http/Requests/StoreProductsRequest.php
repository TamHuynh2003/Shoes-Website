<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
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
            'descriptions' => 'required|string|max:255',

            'purchase_price' => 'required|numeric',
            'selling_price' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ":attribute bắt buộc phải nhập",
            'string' => ":attribute phải là chuỗi",

            'min' => ":attribute không được nhỏ hơn :min kí tự",
            'max' => ":attribute không được lớn hơn :min kí tự",

            'numeric' => ":attribute không hợp lệ",

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Giày',
            'descriptions' => 'Mô tả',

            'purchase_price' => 'Giá nhập',
            'selling_price' => 'Giá bán',
        ];
    }
}
