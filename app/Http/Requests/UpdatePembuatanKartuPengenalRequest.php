<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePembuatanKartuPengenalRequest extends FormRequest
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
            'nama' => 'nullable',
            'nrp' => 'nullable',
            'bagian' => 'nullable',
            'divisi' => 'nullable',
            'disetujui' => 'nullable',
            'diketahui' => 'nullable',
            'pemohon' => 'nullable',
        ];
    }
}
