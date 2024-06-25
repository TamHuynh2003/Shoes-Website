<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiscountsRequest extends FormRequest
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
            'amount' => 'required|numeric|min:10|max:80',

            'start_date' => 'required|date',
            'end_date' => 'required|date',

            'type_discounts_id' => 'required',

        ];
    }

    public function messages(): array
    {
        return [
            'required' => ":attribute bắt buộc phải nhập",
            'string' => ":attribute phải là chuỗi",

            'min' => ":attribute không được nhỏ hơn :min kí tự",
            'max' => ":attribute không được lớn hơn :min kí tự",

            'numeric' => ':attribute  bắt buộc phải là số',

            'date' => ':attribute  không đúng định dạng ngày tháng năm',

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Mã giảm giá',
            'amount' => 'Phần trăm giảm giá',

            'start_date' => 'Ngày áp dụng',
            'end_date' => 'Ngày hết hạn',

            'type_discounts_id' => 'Loại giảm giá',
        ];
    }
}
