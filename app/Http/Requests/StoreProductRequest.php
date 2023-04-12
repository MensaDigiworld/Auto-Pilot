<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'nullable',
            'category_id' => 'nullable',
            'manufacture_id' => 'required',
            'model_id' => 'required',
            'body_type_id' => 'required',
            'transmission_id' => 'required',
            'fuel_type_id' => 'required',
            'drive_system_id' => 'nullable',
            'chassis_id' => 'required',
            'enginecc_id' => 'required',
            'door_id' => 'nullable',
            'seating_capacity_id' => 'required',
            'gear_id' => 'nullable',
            'package_id' => 'nullable',
            'company_id' => 'nullable',
            'status' => 'nullable',
        ];
    }
}
