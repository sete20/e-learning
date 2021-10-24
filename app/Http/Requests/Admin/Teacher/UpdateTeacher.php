<?php

namespace App\Http\Requests\Admin\Teacher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateTeacher extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.teacher.edit', $this->teacher);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
            'phone' => ['sometimes', Rule::unique('teachers', 'phone')->ignore($this->teacher->getKey(), $this->teacher->getKeyName()), 'string'],
            'email' => ['sometimes', 'email', Rule::unique('teachers', 'email')->ignore($this->teacher->getKey(), $this->teacher->getKeyName()), 'string'],
            'password' => ['nullable', 'confirmed', 'min:7', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/', 'string'],
            'enabled' => ['nullable', 'boolean'],
            'image' => ['sometimes', 'string'],
            'email_verified_at' => ['nullable', 'date'],
            'material_id' => ['sometimes', 'array'],

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
        $sanitized['password'] = bcrypt($sanitized['password']);

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
