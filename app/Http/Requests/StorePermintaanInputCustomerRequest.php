<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePermintaanInputCustomerRequest extends FormRequest
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
            'tanggal' => 'date|nullable',
            'class' => 'nullable',
            'title' => 'nullable',
            'nama' => 'nullable',
            'no_cust' => 'nullable',
            'kode_cust' => 'nullable',
            'alamat' => 'nullable',
            'negara' => 'nullable',
            'kode_country' => 'nullable',
            'kota' => 'nullable',
            'email' => 'nullable',
            'telp' => 'nullable',
            'npwp' => 'nullable',
            'sd' => 'nullable',
            'biz_type_p1' => 'nullable',
            'nama_agent' => 'nullable',
            'kode_brand1' => 'nullable',
            'kode_brand2' => 'nullable',
            'kode_brand3' => 'nullable',
            'long_desc1' => 'nullable',
            'long_desc2' => 'nullable',
            'long_desc3' => 'nullable',
            'negara1' => 'nullable',
            'negara2' => 'nullable',
            'negara3' => 'nullable',
            'allowance_qty' => 'nullable',
            'tax' => 'nullable',
            'assigment' => 'nullable',
            'del_con' => 'nullable',
            'kurs' => 'nullable',
            'satuan' => 'nullable',
            'sales' => 'nullable',
            'association1' => 'nullable',
            'association2' => 'nullable',
            'association3' => 'nullable',
            'fcmlama_digital' => 'nullable',
            'fcmlama_dyed' => 'nullable',
            'fcmlama_print' => 'nullable',
            'fcmlama_white' => 'nullable',
            'fcmbaru_digital' => 'nullable',
            'fcmbaru_dyed' => 'nullable',
            'fcmbaru_print' => 'nullable',
            'fcmbaru_white' => 'nullable',
            'table_price' => 'nullable',
            'packing' => 'nullable',
            'cutting' => 'nullable',
            'standart_sample' => 'nullable',
            'credit_limit' => 'nullable',
            'payterm' => 'nullable',
            'alasan_perubahan' => 'nullable',
            'history_pembayaran' => 'nullable',
            'title1' => 'nullable',
            'title2' => 'nullable',
            'title3' => 'nullable',
            'nama_cp1' => 'nullable',
            'nama_cp2' => 'nullable',
            'nama_cp3' => 'nullable',
            'jabatan_cp1' => 'nullable',
            'jabatan_cp2' => 'nullable',
            'jabatan_cp3' => 'nullable',
            'phone_cp1' => 'nullable',
            'phone_cp2' => 'nullable',
            'phone_cp3' => 'nullable',
            'email_cp1' => 'nullable',
            'email_cp2' => 'nullable',
            'email_cp3' => 'nullable',

            //kd5
            'kd5_title1' => 'nullable',
            'kd5_class1' => 'nullable',
            'kd5_no_cust1' => 'nullable',
            'kd5_kode_cust1' => 'nullable',
            'kd5_nama1' => 'nullable',
            'kd5_alamat1' => 'nullable',
            'kd5_negara1' => 'nullable',
            'kd5_kode_country1' => 'nullable',
            'kd5_kota1' => 'nullable',
            'kd5_email1' => 'nullable',
            'kd5_telp1' => 'nullable',
            'kd5_npwp1' => 'nullable',

            'kd5_title2' => 'nullable',
            'kd5_class2' => 'nullable',
            'kd5_nama2' => 'nullable',
            'kd5_alamat2' => 'nullable',
            'kd5_negara2' => 'nullable',
            'kd5_kode_country2' => 'nullable',
            'kd5_kota2' => 'nullable',
            'kd5_email2' => 'nullable',
            'kd5_telp2' => 'nullable',
            'kd5_npwp2' => 'nullable',
            'kd05_no_cust2' => 'nullable',
            'kd05_kode_cust2' => 'nullable',

            'kd5_title3' => 'nullable',
            'kd5_class3' => 'nullable',
            'kd5_no_cust3' => 'nullable',
            'kd5_kode_cust3' => 'nullable',
            'kd5_nama3' => 'nullable',
            'kd5_alamat3' => 'nullable',
            'kd5_negara3' => 'nullable',
            'kd5_kode_country3' => 'nullable',
            'kd5_kota3' => 'nullable',
            'kd5_email3' => 'nullable',
            'kd5_telp3' => 'nullable',
            'kd5_npwp3' => 'nullable',

            //additional
            // 'add_perubahan_alamat' => 'nullable',
            // 'add_fax' => 'nullable',
            // 'add_bidang' => 'nullable',
            // 'add_jenis_bisnis' => 'nullable',
            // 'add_orientasi_bisnis' => 'nullable',
            // 'add_type_perusahaan' => 'nullable',
            // 'add_kepemilikan' => 'nullable',
            // 'add_jenis_kepemilikan' => 'nullable',
            // 'add_lama_bisnis' => 'nullable',
            // 'add_credit_limit_request' => 'nullable',
            // 'add_credit_term_request' => 'nullable',
            // 'add_cara_pembayaran' => 'nullable',
            // 'add_bank_koresponden1' => 'nullable',
            // 'add_bank_koresponden2	' => 'nullable',
            // 'add_cust_class' => 'nullable',
            // 'add_kerjasama_lpa' => 'nullable',
            // 'add_cust1' => 'nullable',
            // 'add_cust2' => 'nullable',
            // 'add_cust3' => 'nullable',
            // 'add_cust4' => 'nullable',
            // 'add_cust5' => 'nullable',
            // 'add_sup1' => 'nullable',
            // 'add_sup2' => 'nullable',
            // 'add_sup3' => 'nullable',
            // 'add_sup4' => 'nullable',
            // 'add_sup5' => 'nullable',
            'status' => 'nullable',
            'status_form' => 'nullable',
        ];
    }
}
