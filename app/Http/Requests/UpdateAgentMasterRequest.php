<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgentMasterRequest extends FormRequest
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
            'agent' => 'nullable',
            'language' => 'nullable',
            'title' => 'nullable',
            'shortname' => 'nullable',
            'status' => 'nullable',
            'agent_kind' => 'nullable',
            'name1' => 'nullable',
            'name2' => 'nullable',
            'addit' => 'nullable',
            'street' => 'nullable',
            'cocd' => 'nullable',
            'cty' => 'nullable',
            'pobox' => 'nullable',
            'phone' => 'nullable',
            'email' => 'nullable',
            'mobile' => 'nullable',
            'home' => 'nullable',
            'fax' => 'nullable',
            'kurs' => 'nullable',
        ];
    }
}
