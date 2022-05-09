<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLaporanKecelakaanKerjaRequest extends FormRequest
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
            'nama_penderita' => 'nullable',
            'tgl_lahir' => 'nullable',
            'no_jamsostek' => 'nullable',
            'bagian' => 'nullable',
            'tempat_tinggal' => 'nullable',
            'tempat_kecelakaan' => 'nullable',
            'tanggal_kecelakaan' => 'nullable',
            'sebab_kecelakaan' => 'nullable',
            'keterangan_luka' => 'nullable',
            'penolong' => 'nullable',
            'dirawat_di' => 'nullable',
            'keterangan' => 'nullable',
            'nrp' => 'nullable',
            'job_code' => 'nullable',
            'nik' => 'nullable',
            'tgl_dibuat' => 'date|nullable',

        ];
    }
}
