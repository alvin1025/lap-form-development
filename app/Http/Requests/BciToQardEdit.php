<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BciToQardEdit extends FormRequest
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
            'date' => 'date|nullable',
            'customer' => 'nullable',
            'tanggal_memo' => 'date|nullable',
            'nomor_memo' => 'nullable',
            'jenis_sample' => 'nullable',
            'aktual_ne1_pakan' => 'nullable',
            'ne1_lycra' => 'nullable',
            'arah_twist_pakan' => 'nullable',
            'tpi_pakan' => 'numeric|nullable',
            'cv_tpi_pakan' => 'numeric|nullable',
            'ne1_slub' => 'numeric|nullable',
            'rata_length' => 'numeric|nullable',
            'min_length' => 'numeric|nullable',
            'max_length' => 'numeric|nullable',
            'ne1_pause' => 'numeric|nullable',
            'rata_distance' => 'numeric|nullable',
            'min_distance' => 'numeric|nullable',
            'max_distance' => 'numeric|nullable',
            'slub_meter' => 'numeric|nullable',
            'aktual_ne1_lusi' => 'nullable',
            'arah_twist_lusi' => 'nullable',
            'tpi_lusi' => 'numeric|nullable',
            'cv_tpi_lusi' => 'numeric|nullable',
            'note' => 'nullable',
            'status' => 'nullable'
        ];
    }
}
