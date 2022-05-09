<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDaftarKebutuhanMaterialRequest extends FormRequest
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
            'no_kebutuhan_1' => 'nullable',
            'tanggal' => 'date|nullable',
            'no_kebutuhan_2' => 'nullable',
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
            // qtt
            'qtt1' => 'nullable',
            'qtt2' => 'nullable',
            'qtt3' => 'nullable',
            'qtt4' => 'nullable',
            'qtt5' => 'nullable',
            'qtt6' => 'nullable',
            'qtt7' => 'nullable',
            'qtt8' => 'nullable',
            'qtt9' => 'nullable',
            'qtt10' => 'nullable',
            // harga
            'harga1' => 'nullable',
            'harga2' => 'nullable',
            'harga3' => 'nullable',
            'harga4' => 'nullable',
            'harga5' => 'nullable',
            'harga6' => 'nullable',
            'harga7' => 'nullable',
            'harga8' => 'nullable',
            'harga9' => 'nullable',
            'harga10' => 'nullable',
            // ttl_harga
            'ttl_harga1' => 'nullable',
            'ttl_harga2' => 'nullable',
            'ttl_harga3' => 'nullable',
            'ttl_harga4' => 'nullable',
            'ttl_harga5' => 'nullable',
            'ttl_harga6' => 'nullable',
            'ttl_harga7' => 'nullable',
            'ttl_harga8' => 'nullable',
            'ttl_harga9' => 'nullable',
            'ttl_harga10' => 'nullable',
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

            'diperiksa_oleh' => 'nullable',
            'dibuat_oleh' => 'nullable',
        ];
    }
}
