<?php

namespace App\Http\Requests\Teacher\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreCourse extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return isTeacher();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'slug' => ['required', Rule::unique('courses', 'slug'), 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'discount' => ['required', 'numeric'],
            'image' => ['nullable', 'string'],
            'times' => ['required', 'string'],
            'live' => ['nullable', 'string'],
            'activated' => ['nullable', 'boolean'],
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();
        $sanitized['material_id'] = auth('teacher')->user()->material_id;
        $sanitized['teacher_id'] = auth('teacher')->user()->id;

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
