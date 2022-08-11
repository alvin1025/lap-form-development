<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreditLimitBaruRequest extends FormRequest
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
            'jenis_cust' => 'required',
            'kode_cust' => 'required',
            'no_cust' => 'nullable',
            'nama_cust' => 'required',
            'contact_person' => 'required',
            'alamat' => 'required',
            'perubahan_alamat' => 'required',
            'no_telp' => 'required',
            'fax' => 'required',
            'jenis_bisnis' => 'required',
            'bidang' => 'required',
            'orientasi_market' => 'required',
            'type_perusahaan' => 'required',
            'kepemilikan' => 'required',
            'jenis_kepemilikan' => 'required',
            'lama_bisnis' => 'required',
            'omzet' => 'required',
            'credit_limit' => 'required',
            'credit_limit_berubah' => 'required',
            'credit_term' => 'required',
            'credit_term_berubah' => 'required',
            'cara_pembayaran' => 'required',
            'lama_bekerja_dengan_lpa' => 'required',
            'bank_koresponden1' => 'required',
            'bank_koresponden2' => 'required',
            'data_cust1' => 'nullable',
            'data_cust2' => 'nullable',
            'data_cust3' => 'nullable',
            'data_cust4' => 'nullable',
            'data_cust5' => 'nullable',
            'data_supp1' => 'nullable',
            'data_supp2' => 'nullable',
            'data_supp3' => 'nullable',
            'data_supp4' => 'nullable',
            'data_supp5' => 'nullable',
            'customer_class' => 'nullable',
            'alasan_perubahan' => 'required',
            'history_pembayaran' => 'required',
            'tanggal' => 'date|required',
            'dibuat_oleh' => 'nullable',
            'mengetahui' => 'nullable',
            'disetujui' => 'nullable',
        ];
    }
}
