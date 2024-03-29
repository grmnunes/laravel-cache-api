<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseFormRequest extends FormRequest
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
        $courseId = $this->id;
        
        return [
            'name' => ['required', 'min:3', 'max:255', "unique:courses,name,{$courseId},uuid"],
            'description' => ['required', 'min:10'],
        ];
    }
}
