<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePermohonanPromosiRequest extends FormRequest
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
            // 'user_id' => 'nullable',
            'no' => 'nullable',
            'date' => 'date|nullable',
            'nama' => 'nullable',
            'nrp' => 'nullable',
            'divisi' => 'nullable',
            'bagian' => 'nullable',
            'jabatan_sekarang' => 'nullable',
            'job_code_lama' => 'nullable',
            'jabatan_baru' => 'nullable',
            'job_code_baru' => 'nullable',
            'tanggal_masuk' => 'nullable',
            'masa_kerja' => 'nullable',
            'alasan_promosi' => 'nullable',
            'level' => 'nullable',
            'disetujui1' => 'nullable',
            'disetujui2' => 'nullable',
            'diajukan' => 'nullable',
            'mengetahui1' => 'nullable',
            'mengetahui2' => 'nullable',

        ];
    }
}
