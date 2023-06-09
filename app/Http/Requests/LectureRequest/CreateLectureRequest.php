<?php

namespace App\Http\Requests\LectureRequest;

use Illuminate\Foundation\Http\FormRequest;

class CreateLectureRequest extends FormRequest
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
            'topic' => 'required|string|unique:lectures,topic,id',
            'description' => 'required|string',
        ];
    }
}
