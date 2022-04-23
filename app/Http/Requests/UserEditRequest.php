<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'employee_name' => 'nullable|max:60',
            'employee_no' => 'nullable|max:8',
            'password' => 'nullable|min:8|max:255',
            'email' => 'nullable',
            'position_job_name' => 'nullable|max:60',
            'jabatan' => 'nullable|max:60',
            'job_code' => 'nullable|max:60',
            'work_location' => 'nullable|max:60',
            'employee_status' => 'nullable|max:60',
            'division' => 'nullable|max:60',
        ];
    }
}
