<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShipmentKindManagementRequest extends FormRequest
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
            'shki' => 'nullable',
            'carr' => 'nullable',
            'description' => 'nullable',
            'shipment_class' => 'nullable',
            'supplier' => 'nullable',
            'pack' => 'nullable',
            'dispadvgen' => 'nullable',
        ];
    }
}
