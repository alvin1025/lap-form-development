<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ws05EditRequest extends FormRequest
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
            'input_date' => 'date|nullable',
            'pic' => 'nullable',
            'article_greige' => 'nullable',
            'greige_description' => 'nullable',
            'composition' => 'nullable',
            'article_finish' => 'nullable',
            'variant' => 'nullable',
            'customer' => 'nullable',
            'standar_full_width_ws05' => 'numeric|nullable',
            'finish_width_from' => 'numeric|nullable',
            'finish_width_to' => 'numeric|nullable',
            'fw_inc' => 'numeric|nullable',
            'fw_label_inc' => 'nullable',
            'greige_lusi' => 'numeric|nullable',
            'greige_pakan' => 'numeric|nullable',
            'greige_lebar' => 'numeric|nullable',
            'greige_grm' => 'numeric|nullable',
            'greige_gsm' => 'numeric|nullable',
            'greige_ne_lusi' => 'numeric|nullable',
            'greige_ne_pakan' => 'numeric|nullable',
            'finish_identity_konstruksi_lusi' => 'numeric|nullable',
            'finish_identity_konstruksi_pakan' => 'numeric|nullable',
            'finish_identity_konstruksi_grmt' => 'numeric|nullable',
            'finish_identity_konstruksi_gsqm' => 'numeric|nullable',
            'status' => 'nullable',
        ];
    }
}
