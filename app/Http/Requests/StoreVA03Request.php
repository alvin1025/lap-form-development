<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVA03Request extends FormRequest
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
            'collecion' => 'nullable',
            'description' => 'nullable',
            'standar_qu' => 'nullable',
            'period_from' => 'nullable',
            'period_to' => 'nullable',
            'blocked_since' => 'nullable',
        ];
    }
}
