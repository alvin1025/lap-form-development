<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormMktRequest extends FormRequest
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
            'dev_model_id' => 'required',
            'date_in' => 'date',
            'due_date' => 'date',
            'no' => 'nullable',
            'dev_greige' => 'nullable|max:255',
            'jenis_development1' => 'nullable',
            'development1' => 'nullable',
            'jenis_development2' => 'nullable',
            'development2' => 'nullable',
            'subject' => 'nullable',
            'solid' => 'nullable|max:255',
            'quality' => 'nullable|max:255',
            'special_finish' => 'nullable|max:255',
            'end_use' => 'nullable|max:255',
            'note' => 'nullable|max:255',
            'image' => 'image|file|max:2048',
            'finished_cont' => 'nullable|max:255',
            'width_cont' => 'nullable',
            'shringkage_cont' => 'nullable',
            'weave_cont' => 'nullable',
            'cutt_width' => 'nullable',
            'weight_cont' => 'nullable',
            'finishing_cont' => 'nullable|max:255',
            'greige_contruction' => 'nullable|max:255',
            'weave_greige' => 'nullable|max:255',
            'width_greige' => 'nullable',
            'weight_greige' => 'nullable',
            'yarn_description' => 'nullable|max:255',
            'yarn_count' => 'nullable',
            'ne_denier' => 'nullable|max:255',
            'weight_yarn' => 'nullable',
        ];
    }
}
