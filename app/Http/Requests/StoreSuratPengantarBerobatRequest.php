<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuratPengantarBerobatRequest extends FormRequest
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
            'umur' => 'nullable',
            'nrp' => 'nullable',
            'nik' => 'nullable',
            'bagian' => 'nullable',
            'jam' => 'nullable',
            'kronologi' => 'nullable',
            'keterangan' => 'nullable',
            'hormat_kami' => 'nullable',
        ];
    }
}
