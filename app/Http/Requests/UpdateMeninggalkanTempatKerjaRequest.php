<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMeninggalkanTempatKerjaRequest extends FormRequest
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
            'tanggal' => 'date|nullable',
            'nama' => 'nullable',
            'nrp' => 'nullable',
            'bagian' => 'nullable',
            'divisi' => 'nullable',
            'ijin_dari' => 'nullable',
            'sampai' => 'nullable',
            'keluar_jam' => 'nullable',
            'sampai_jam' => 'nullable',
            'diketahui' => 'nullable',
            'disetujui1' => 'nullable',
            'disetujui2' => 'nullable',
            'pemohon' => 'nullable',
        ];
    }
}
