<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSerahTerimaMaintenanceRequest extends FormRequest
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
            'nama_mesin' => 'nullable',
            'merk' => 'nullable',
            'lokasi' => 'nullable',
            'model' => 'nullable',
            'tanggal_datang' => 'date|nullable',
            'uraian' => 'nullable',
            'keterangan' => 'nullable',
            'tanggal' => 'date|nullable',
            'penerima' => 'nullable',
            'penyerah' => 'nullable',

        ];
    }
}
