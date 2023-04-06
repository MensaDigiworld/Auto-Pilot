<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBusinessPartnerRequest extends FormRequest
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
            'business_category' => 'required',
            'business_type' => 'required',
            'name' => 'string|nullable',
            'contact_number' => 'required',
            'status' => 'nullable',
            'description' => 'nullable|string',
            'ledger_code' => 'nullalble',
            'company_code' => 'nullalble',
        ];
    }
}
