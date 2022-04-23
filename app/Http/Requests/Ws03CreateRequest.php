<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ws03CreateRequest extends FormRequest
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
            'cust_no' => 'nullable',
            'customer' => 'nullable',
            'article_no_desc' => 'nullable',
            'va' => 'nullable',
            'substrat' => 'nullable',
            'lgth_ch' => 'nullable',
            'f' => 'nullable',
            'comment' => 'nullable',
            'article_descrip' => 'nullable',
            't_wd' => 'nullable',
            'g_rmt' => 'nullable',
            'g_sqm' => 'nullable',
            'tcwa' => 'nullable',
            'tcwe' => 'nullable',
            'supplier' => 'nullable',
            'new_entr' => 'nullable',
            'new_date' => 'nullable',
            'no_2' => 'nullable',
            'prpla_article' => 'nullable',
            'none1' => 'nullable',
            'material' => 'nullable',
            'finish' => 'nullable',
            'from_greige' => 'nullable',
            'order' => 'nullable',
            'ord_date' => 'nullable',
            'none2' => 'nullable',
            'sample' => 'nullable',
            'mod_user' => 'nullable',
            'mod_date' => 'date|nullable',
            'weave_repeat_ke' => 'nullable',
            'reedin' => 'nullable',
            'prodstar' => 'nullable',
            'prodend' => 'nullable',
            's' => 'nullable',
            'no_3' => 'nullable',

        ];
    }
}
