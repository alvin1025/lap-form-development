<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVs04Request extends FormRequest
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
            'agent' => 'nullable',
            'cust' => 'nullable',
            'sd' => 'nullable',
            'fr' => 'nullable',
            'qu' => 'nullable',
            'ctype' => 'nullable',
            'qg' => 'nullable',
            'from_quantity' => 'nullable',
            'allow' => 'nullable',
            'value' => 'nullable',
        ];
    }
}
