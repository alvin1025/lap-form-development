<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kd05UpdateRequest extends FormRequest
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
            'no_cust1' => 'required',
            'addresscode1' => 'required',
            'title1' => 'required',
            'kd5negara1' => 'required',
            'kode_county1' => 'required',
            'kota1' => 'required',
            'email1' => 'required',
            'telp1' => 'required|max:15',
            'npwp1' => 'required',
            'nama11' => 'required',
            'nama21' => 'required',
            'street1' => 'required',
            'addit1' => 'required',
            'postal_code1' => 'required',
            'po_box1' => 'required',
            'tax1' => 'required',
            'mobile1' => 'required',
            'home1' => 'required',
            'fax1' => 'required',

        ];
    }
}
