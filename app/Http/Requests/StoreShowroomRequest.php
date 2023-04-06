<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShowroomRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'contact' => 'nullable|max:11',
            'email' => 'nullable|email',
            'status' => 'nullable',
            'company_code' => 'nullable',
            'type' => 'required',
            'city_code' => 'nullable',
        ];
    }
}
