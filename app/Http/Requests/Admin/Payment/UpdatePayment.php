<?php

namespace App\Http\Requests\Admin\Payment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePayment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.payment.edit', $this->payment);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user_id' => ['sometimes', 'string'],
            'order_id' => ['sometimes', 'string'],
            'teacher_id' => ['sometimes', 'string'],
            'name' => ['sometimes', 'string'],
            'phone' => ['sometimes', 'string'],
            'total' => ['sometimes', 'numeric'],
            'discount' => ['sometimes', 'numeric'],
            'payment' => ['sometimes', 'string'],
            'provider' => ['nullable', 'string'],
            'provider_id' => ['nullable', 'string'],
            
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


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
