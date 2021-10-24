<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.user.edit', $this->user);
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
            'email' => ['sometimes', 'email', Rule::unique('users', 'email')->ignore($this->user->getKey(), $this->user->getKeyName()), 'string'],
            'email_verified_at' => ['nullable', 'date'],
            'password' => ['sometimes', 'confirmed', 'min:7', 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9]).*$/', 'string'],
            'phone' => ['nullable', Rule::unique('users', 'phone')->ignore($this->user->getKey(), $this->user->getKeyName()), 'string'],
            'other_phone' => ['nullable', 'string'],
            'image' => ['nullable', 'string'],
            'type' => ['nullable', 'array'],
            'class_id' => ['nullable', 'array'],

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
        $sanitized['type'] = $sanitized['type']['id'];
        $sanitized['class_id'] = $sanitized['class_id']['id'];
        $sanitized['password'] = bcrypt($sanitized['password']);


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}