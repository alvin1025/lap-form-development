<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTukarShiftRequest extends FormRequest
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
            'keperluan' => 'nullable',
            'nama' => 'nullable',
            'nrp' => 'nullable',
            'bagian' => 'nullable',
            'divisi' => 'nullable',
            'tanggal' => 'date|nullable',
            'nama2' => 'nullable',
            'nrp2' => 'nullable',
            'bagian2' => 'nullable',
            'divisi2' => 'nullable',
            'shift' => 'nullable',
            'tukar_shift' => 'nullable',
            'masuk_kerja' => 'date|nullable',
            'libur' => 'date|nullable',
            'disetujui' => 'nullable',
            'disetujui2' => 'nullable',
            'disahkan' => 'nullable',
            'pemohon' => 'nullable',
        ];
    }
}
