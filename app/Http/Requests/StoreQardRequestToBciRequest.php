<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQardRequestToBciRequest extends FormRequest
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
            'form_request_development_id' => 'nullable',
            'kepada' => 'nullable',
            'dari' => 'nullable',
            'no' => 'nullable',
            'tanggal' => 'date|nullable',
            'fabric' => 'nullable',
            'jumlah_sample' => 'nullable',
            'identitas' => 'nullable',
            'greige_supply' => 'nullable',
            'article' => 'nullable',
            'weave' => 'nullable',
            'greige_width' => 'nullable',
            'construction' => 'nullable',
            'nomor_benang' => 'nullable',
            'twisting' => 'nullable',
            'type_twisting' => 'nullable',
            'komposisi_serat' => 'nullable',
            'lampiran1_identitas' => 'nullable',
            'lampiran1_greige_supply' => 'nullable',
            'lampiran1_article' => 'nullable',
            'lampiran1_weave' => 'nullable',
            'lampiran1_construction' => 'nullable',
            'lampiran1_greige_width' => 'nullable',
            'lampiran2_identitas' => 'nullable',
            'lampiran2_greige_supply' => 'nullable',
            'lampiran2_article' => 'nullable',
            'lampiran2_weave' => 'nullable',
            'lampiran2_construction' => 'nullable',
            'lampiran2_greige_width' => 'nullable',
            'lampiran3_identitas' => 'nullable',
            'lampiran3_greige_supply' => 'nullable',
            'lampiran3_article' => 'nullable',
            'lampiran3_weave' => 'nullable',
            'lampiran3_construction' => 'nullable',
            'lampiran3_greige_width' => 'nullable',

            'lampiran4_identitas' => 'nullable',
            'lampiran4_greige_supply' => 'nullable',
            'lampiran4_article' => 'nullable',
            'lampiran4_weave' => 'nullable',
            'lampiran4_construction' => 'nullable',
            'lampiran4_greige_width' => 'nullable',

            'lampiran5_identitas' => 'nullable',
            'lampiran5_greige_supply' => 'nullable',
            'lampiran5_article' => 'nullable',
            'lampiran5_weave' => 'nullable',
            'lampiran5_construction' => 'nullable',
            'lampiran5_greige_width' => 'nullable',

        ];
    }
}
