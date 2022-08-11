<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kd14UpdateRequest extends FormRequest
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
            'kd14no_cust' => 'nullable',
            'cp1' => 'nullable',
            'nama_cp1' => 'nullable',
            'mobile_cp1' => 'nullable',
            'phone_cp1' => 'nullable',
            'function_cp1' => 'nullable',
            'role_cp1' => 'nullable',
            'sinc_cp1' => 'nullable',
            'email_cp1' => 'nullable',
            'sd_cp1' => 'nullable',
            'sg_cp1' => 'nullable',
            'add_addr_cp1' => 'nullable',
        ];
    }
}
