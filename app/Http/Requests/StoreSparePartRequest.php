<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSparePartRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:spare_parts',
            'part_number' => 'string|max:255',
            'price' => 'string|max:255',
            'discount' => 'string|max:255',
            'discount_percent' => 'string|max:255',
            'vat' => 'string|max:255',
            'vat_percent' => 'string|max:255',
            'type' => 'required',
            // 'status' => 'required',
            'company_id' => 'nullable',
        ];
    }
}
