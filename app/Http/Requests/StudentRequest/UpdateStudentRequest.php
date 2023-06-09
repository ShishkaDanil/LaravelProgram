<?php

namespace App\Http\Requests\StudentRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'name' => 'sometimes|required|string',
            'email' => 'sometimes|required|email|unique:students,email',
            'school_class_id' => 'exists:school_classes,id'
        ];
    }
}
