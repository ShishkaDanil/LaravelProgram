<?php

namespace App\Http\Requests\CurriculumRequest;

use Illuminate\Foundation\Http\FormRequest;

class CreateCurriculumRequest extends FormRequest
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
            'school_class_id' => 'required|exists:school_classes,id',
            'lecture_id' => 'required|exists:lectures,id',
            'order' => 'required'
        ];
    }
}
