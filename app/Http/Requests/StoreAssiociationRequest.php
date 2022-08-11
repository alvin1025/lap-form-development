<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssiociationRequest extends FormRequest
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
            'title' => 'nullable',
            'no_cust' => 'nullable',
            'name' => 'nullable',
            'shortname' => 'nullable',
            'street' => 'nullable',
            'additional' => 'nullable',
            'tax' => 'nullable',
            'postal' => 'nullable',
            'country_code' => 'nullable',
            'kota' => 'nullable',
            'fax' => 'nullable',
            'pobox' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'mobile' => 'nullable',
            'assoc' => 'nullable',
        ];
    }
}
