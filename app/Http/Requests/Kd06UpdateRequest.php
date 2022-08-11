<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kd06UpdateRequest extends FormRequest
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
            'kd6no_cust' => 'nullable',
            'sd' => 'required',
            'payterm' => 'required',
            'kd6tax' => 'required',
            'del_con' => 'required',
            'kd6sg' => 'required',
            'kurs' => 'required',
            'assigment' => 'required',
            'satuan' => 'required',
            'biz_type_p1' => 'nullable',
            'nama_agent1' => 'nullable',
            'nama_agent2' => 'nullable',
            'nama_agent3' => 'nullable',
            'sales' => 'required',
            'staff_member' => 'nullable',
            'from' => 'nullable',
            'to' => 'nullable',
            'allowance_qty' => 'nullable',
            'pc' => 'nullable',
            'print' => 'nullable',
        ];
    }
}
