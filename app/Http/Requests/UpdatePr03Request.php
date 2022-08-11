<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePr03Request extends FormRequest
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
            'coll' => 'nullable',
            'pricegrp' => 'nullable',
            'serno' => 'nullable',
            'validity_from' => 'date|nullable',
            'up_to' => 'date|nullable',
            'resp' => 'nullable',
            'currency' => 'nullable',
            'rate1' => 'nullable',
            'rate2' => 'nullable',
            'price_unit' => 'nullable',
            'min_qty_surcharge' => 'nullable',
            'upto_qty_surcharge' => 'nullable',
            'qu' => 'nullable',
        ];
    }
}
