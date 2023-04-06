<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'supplier_type' => 'required',
            'business_category' => 'required',
            'name' => 'nullable',
            'contact_person' => 'nullable',
            'address' => 'nullable',
            'zip_code' => 'nullable',
            'country_code' => 'required',
            'contact' => 'required',
            'contact_2' => 'nullable',
            'contact_3' => 'nullable',
            'email' => 'nullable',
            'bin' => 'nullable',
            'enlistment_type' => 'nullable',
            'entry_date' => 'nullable',
            'status' => 'nullable',
            'ledger_code' => 'nullable',
            'company_code' => 'nullable',
            'procurement_type' => 'required',
            'bank_id' => 'nullable',
            'beneficiary_name' => 'nullable',
            'branch_name' => 'nullable',
            'branch_address' => 'nullable',
            'swift_code' => 'nullable',
        ];
    }
}
