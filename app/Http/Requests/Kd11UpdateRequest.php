<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kd11UpdateRequest extends FormRequest
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
            'kd11no_cust' => 'required',
            'sd1' => 'required',
            'sg1' => 'required',
            'association_no1' => 'required',
            'status1' => 'required',
            'central_regu1' => 'required',
            'conditions1' => 'required'
        ];
    }
}
