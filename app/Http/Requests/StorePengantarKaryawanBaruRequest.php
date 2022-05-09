<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePengantarKaryawanBaruRequest extends FormRequest
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
            'mulai_kerja' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'bagian' => 'nullable',
            'divisi' => 'nullable',
            'level' => 'nullable',
            'tanggal' => 'date|nullable',
            'hormat_kami' => 'nullable',
            'diterima_oleh' => 'nullable',
        ];
    }
}
