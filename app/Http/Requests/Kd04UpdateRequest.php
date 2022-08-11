<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kd04UpdateRequest extends FormRequest
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
            'kd4no_cust' => 'required',
            'no_debitor' => 'required',
            'no_creditor' => 'required',
            'no_group_cust' => 'required',
            'credit_cust' => 'required',
            'credit_limit' => 'required',
            'credit_limit2' => 'nullable',
            'credit_limit3' => 'nullable',
            'credit_limit4' => 'nullable',
            'credit_limit5' => 'nullable',
            'credit_from' => 'required',
            'credit_to' => 'required',
            'credit_line_check' => 'required',
            'block_delivery' => 'required',
            'block' => 'required',
            'block_reason' => 'required',
        ];
    }
}
