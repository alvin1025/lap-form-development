<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesCreateRequest extends FormRequest
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
            'no' => 'nullable',
            'date' => 'date',
            'name' => 'nullable',
            'customer' => 'nullable',
            'opportunity_order' => 'nullable',
            'target_date' => 'date',
            'purpose' => 'nullable|max:255',
            'note' => 'nullable|max:255',
            'article_code' => 'nullable',
            'width' => 'nullable',
            'width_value' => 'numeric|nullable',
            'sample' => 'nullable',
            'handfeel_target' => 'nullable',
            'end_use' => 'nullable',
            'request_design' => 'nullable',
            'request_color' => 'nullable',
            'special_finish' => 'nullable',
            'shrinkage' => 'nullable',
            'sample_needed' => 'nullable',
            'sample_needed_value' => 'nullable',
            'status' => 'nullable',
        ];
    }
}
