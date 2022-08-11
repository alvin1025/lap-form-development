<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentTermMasterRequest extends FormRequest
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
            'pay_term' => 'nullable',
            'language' => 'nullable',
            'status' => 'nullable',
            'acc_type' => 'nullable',
            'description' => 'nullable',
            'payment_kind' => 'nullable',
            'surcharge' => 'nullable',
            'net_day' => 'nullable',
            'net_month' => 'nullable',
            'pre_intere' => 'nullable',
            'def_intere' => 'nullable',
        ];
    }
}
