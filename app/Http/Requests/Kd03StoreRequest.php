<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Kd03StoreRequest extends FormRequest
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
            'no_cust' => 'nullable',
            'kd06_id' => 'nullable',
            'kd04_id' => 'nullable',
            'kd05_id' => 'nullable',
            'kd11_id' => 'nullable',
            'kd14_id' => 'nullable',
            'additional_id' => 'nullable',
            'class' => 'required',
            'title' => 'required',
            'kd6no_cust' => 'required',
            // 'kode_cust' => 'required',
            'kode_county' => 'required',
            'kota' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'npwp' => 'required',
            'short_name' => 'required',
            'nama1' => 'required',
            'nama2' => 'required',
            'street' => 'required',
            'negara' => 'required',
            'addit' => 'required',
            'postal_code' => 'required',
            'po_box' => 'required',
            'tax' => 'nullable',
            'mobile' => 'required',
            'home' => 'required',
            'fax' => 'required',
            'status' => 'required',
            // 'status_form' => 'nullable',
            'tanggal' => 'date|nullable',

            'created_by' => 'nullable',
            'submitted_by' => 'nullable',
            'status_form' => 'nullable',
            'aprv1_by' => 'nullable',
            'aprv2_by' => 'nullable',
            'inputted_by' => 'nullable',
            'finished_by' => 'nullable',
            'rejectted_by' => 'nullable',
            'reject_reason' => 'nullable',


            // kd04
            'kd4no_cust' => 'nullable',
            'no_debitor' => 'nullable',
            'no_creditor' => 'nullable',
            'no_group_cust' => 'nullable',
            'credit_cust' => 'nullable',
            'credit_limit' => 'nullable',
            'credit_limit2' => 'nullable',
            'credit_limit3' => 'nullable',
            'credit_limit4' => 'nullable',
            'credit_limit5' => 'nullable',
            'credit_from' => 'nullable',
            'credit_to' => 'nullable',
            'credit_line_check' => 'nullable',
            'block_delivery' => 'nullable',
            'block' => 'nullable',
            'block_reason' => 'nullable',

            // kd05
            'addresscode1' => 'nullable',
            'title1' => 'nullable',
            'kd5negara1' => 'nullable',
            'kode_county1' => 'nullable',
            'kota1' => 'nullable',
            'email1' => 'nullable',
            'telp1' => 'nullable|max:15',
            'npwp1' => 'nullable',
            'nama11' => 'nullable',
            'nama21' => 'nullable',
            'street1' => 'nullable',
            'addit1' => 'nullable',
            'postal_code1' => 'nullable',
            'po_box1' => 'nullable',
            'tax1' => 'nullable',
            'mobile1' => 'nullable',
            'home1' => 'nullable',
            'fax1' => 'nullable',

            //kd06
            'kd6no_cust' => 'nullable',
            'sd' => 'nullable',
            'biz_type_p1' => 'nullable',
            'nama_agent1' => 'nullable',
            'nama_agent2' => 'nullable',
            'nama_agent3' => 'nullable',
            'nama_agent4' => 'nullable',
            'nama_agent5' => 'nullable',
            'kode_brand1' => 'nullable',
            'kode_brand2' => 'nullable',
            'kode_brand3' => 'nullable',
            'kode_brand4' => 'nullable',
            'kode_brand5' => 'nullable',
            'long_desc1' => 'nullable',
            'long_desc2' => 'nullable',
            'long_desc3' => 'nullable',
            'long_desc4' => 'nullable',
            'long_desc5' => 'nullable',
            'kd5negara1' => 'nullable',
            'negara2' => 'nullable',
            'negara3' => 'nullable',
            'negara4' => 'nullable',
            'negara5' => 'nullable',
            'allowance_qty' => 'nullable',
            'kd6tax' => 'nullable',
            'assigment' => 'nullable',
            'del_con' => 'nullable',
            'payterm' => 'nullable',
            'kurs' => 'nullable',
            'satuan' => 'nullable',
            'sales' => 'nullable',
            'status' => 'nullable',
            'from' => 'nullable',
            'staff_member' => 'nullable',
            'to' => 'nullable',
            'pc' => 'nullable|max:1',
            'print' => 'nullable|max:1',

            // kd11
            'kd11no_cust' => 'nullable',
            'sd1' => 'nullable',
            'sg1' => 'nullable',
            'association_no1' => 'nullable',
            'status1' => 'nullable',
            'validity_from1' => 'nullable|date',
            'validity_to1' => 'nullable|date',
            'central_regu1' => 'nullable',
            'conditions1' => 'nullable',

            // kd14
            'kd14no_cust' => 'nullable',
            'cp1' => 'nullable',
            'nama_cp1' => 'nullable',
            'mobile_cp1' => 'nullable',
            'phone_cp1' => 'nullable',
            'function_cp1' => 'nullable',
            'role_cp1' => 'nullable',
            'sinc_cp1' => 'nullable',
            'email_cp1' => 'nullable',
            'sd_cp1' => 'nullable',
            'sg_cp1' => 'nullable',
            'add_addr_cp1' => 'nullable',
        ];
    }
}
