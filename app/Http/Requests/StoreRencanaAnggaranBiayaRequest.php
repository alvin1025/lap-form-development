<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRencanaAnggaranBiayaRequest extends FormRequest
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
            'no_anggaran_1' => 'nullable',
            'tanggal' => 'date|nullable',
            'no_anggaran_2' => 'nullable',
            // no
            'no1' => 'nullable',
            'no2' => 'nullable',
            'no3' => 'nullable',
            'no4' => 'nullable',
            'no5' => 'nullable',
            'no6' => 'nullable',
            'no7' => 'nullable',
            'no8' => 'nullable',
            'no9' => 'nullable',
            'no10' => 'nullable',
            // uraian
            'uraian1' => 'nullable',
            'uraian2' => 'nullable',
            'uraian3' => 'nullable',
            'uraian4' => 'nullable',
            'uraian5' => 'nullable',
            'uraian6' => 'nullable',
            'uraian7' => 'nullable',
            'uraian8' => 'nullable',
            'uraian9' => 'nullable',
            'uraian10' => 'nullable',
            // biaya
            'biaya1' => 'numeric|nullable',
            'biaya2' => 'numeric|nullable',
            'biaya3' => 'numeric|nullable',
            'biaya4' => 'numeric|nullable',
            'biaya5' => 'numeric|nullable',
            'biaya6' => 'numeric|nullable',
            'biaya7' => 'numeric|nullable',
            'biaya8' => 'numeric|nullable',
            'biaya9' => 'numeric|nullable',
            'biaya10' => 'numeric|nullable',
            // keterangan
            'keterangan1' => 'nullable',
            'keterangan2' => 'nullable',
            'keterangan3' => 'nullable',
            'keterangan4' => 'nullable',
            'keterangan5' => 'nullable',
            'keterangan6' => 'nullable',
            'keterangan7' => 'nullable',
            'keterangan8' => 'nullable',
            'keterangan9' => 'nullable',
            'keterangan10' => 'nullable',

            'disetujui_oleh' => 'nullable',
            'dibuat_oleh' => 'nullable',
        ];
    }
}
