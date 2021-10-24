<?php

namespace App\Http\Requests\Admin\Teacher;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreTeacher extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.teacher.create');
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
            'phone' => ['required', Rule::unique('teachers', 'phone'), 'string'],
            'email' => ['required', 'email', Rule::unique('teachers', 'email'), 'string'],
            'password' => ['nullable', 'confirmed', 'min:7', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/', 'string'],
            'enabled' => ['nullable','boolean'],
            'image' => ['nullable', 'string'],
            'email_verified_at' => ['nullable', 'date'],
            'material_id' => ['required', 'array'],

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
