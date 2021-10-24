<?php

namespace App\Http\Requests\Admin\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateCourse extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.course.edit', $this->course);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'teacher_id' => ['sometimes', 'array'],
            'name' => ['sometimes', 'string'],
            'slug' => ['sometimes', Rule::unique('courses', 'slug')->ignore($this->course->getKey(), $this->course->getKeyName()), 'string'],
            'description' => ['sometimes', 'string'],
            'price' => ['sometimes', 'numeric'],
            'discount' => ['sometimes', 'numeric'],
            'image' => ['nullable', 'string'],
            'material_id' => ['sometimes', 'array'],
            'times' => ['sometimes', 'string'],
            'live' => ['nullable', 'string'],
            'activated' => ['sometimes', 'boolean'],

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
        $sanitized['material_id'] = $sanitized['material_id']['id'];
        $sanitized['teacher_id'] = $sanitized['teacher_id']['id'];

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
