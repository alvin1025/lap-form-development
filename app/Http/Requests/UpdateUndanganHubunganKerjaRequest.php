<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUndanganHubunganKerjaRequest extends FormRequest
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
            'divisi' => 'nullable',
            'hari_tanggal' => 'nullable',
            'waktu' => 'nullable',
            'tempat' => 'nullable',
            'agenda' => 'nullable',
            'dibuat_oleh' => 'nullable',
        ];
    }
}
