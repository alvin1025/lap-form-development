<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUndanganInstrukturTrainingRequest extends FormRequest
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
            'perihal' => 'nullable',
            'nama_trainer' => 'nullable',
            'nama_training' => 'nullable',
            'hari1' => 'nullable',
            'tanggal1' => 'nullable',
            'tempat1' => 'nullable',
            'peserta1' => 'nullable',
            'waktu1' => 'nullable',
            'hari2' => 'nullable',
            'tanggal2' => 'nullable',
            'tempat2' => 'nullable',
            'peserta2' => 'nullable',
            'waktu2' => 'nullable',
            'tanggal' => 'date|nullable',
            'disetujui' => 'nullable',
            'dibuat' => 'nullable',
        ];
    }
}
