<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuratDendaRequest extends FormRequest
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
            'no' => 'nullable',
            'nama' => 'nullable',
            'nrp' => 'nullable',
            'jabatan' => 'nullable',
            'level' => 'nullable',
            'bagian' => 'nullable',
            'divisi' => 'nullable',
            'denda' => 'nullable',
            'berlaku' => 'nullable',
            'diberi_denda' => 'nullable',
            'hr_manager' => 'nullable',
            'mengetahui' => 'nullable',
        ];
    }
}
