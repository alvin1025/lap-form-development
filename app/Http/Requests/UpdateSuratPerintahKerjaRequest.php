<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSuratPerintahKerjaRequest extends FormRequest
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
            'no_surat' => 'nullable',
            'nama' => 'nullable',
            'jabatan' => 'nullable',
            'alamat' => 'nullable',
            'nama_karyawan' => 'nullable',
            'perkerjaan' => 'nullable',
            'alamat_karyawan' => 'nullable',
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
            // jenis pekerjaan
            'jenis_pekerjaan1' => 'nullable',
            'jenis_pekerjaan2' => 'nullable',
            'jenis_pekerjaan3' => 'nullable',
            'jenis_pekerjaan4' => 'nullable',
            'jenis_pekerjaan5' => 'nullable',
            'jenis_pekerjaan6' => 'nullable',
            'jenis_pekerjaan7' => 'nullable',
            'jenis_pekerjaan8' => 'nullable',
            'jenis_pekerjaan9' => 'nullable',
            //volume
            'volume1' => 'numeric|nullable',
            'volume2' => 'numeric|nullable',
            'volume3' => 'numeric|nullable',
            'volume4' => 'numeric|nullable',
            'volume5' => 'numeric|nullable',
            'volume6' => 'numeric|nullable',
            'volume7' => 'numeric|nullable',
            'volume8' => 'numeric|nullable',
            'volume9' => 'numeric|nullable',
            // Harga Sat
            'harga_sat1' => 'numeric|nullable',
            'harga_sat2' => 'numeric|nullable',
            'harga_sat3' => 'numeric|nullable',
            'harga_sat4' => 'numeric|nullable',
            'harga_sat5' => 'numeric|nullable',
            'harga_sat6' => 'numeric|nullable',
            'harga_sat7' => 'numeric|nullable',
            'harga_sat8' => 'numeric|nullable',
            'harga_sat9' => 'numeric|nullable',
            // Jumlah Sat
            'jumlah_sat1' => 'numeric|nullable',
            'jumlah_sat2' => 'numeric|nullable',
            'jumlah_sat3' => 'numeric|nullable',
            'jumlah_sat4' => 'numeric|nullable',
            'jumlah_sat5' => 'numeric|nullable',
            'jumlah_sat6' => 'numeric|nullable',
            'jumlah_sat7' => 'numeric|nullable',
            'jumlah_sat8' => 'numeric|nullable',
            'jumlah_sat9' => 'numeric|nullable',
            // Jumlah Total
            'jumlah_total' => 'numeric|nullable',
            'tanggal' => 'date|nullable',
            'pelaksana' => 'nullable',
            'general_a_manager' => 'nullable',
        ];
    }
}
