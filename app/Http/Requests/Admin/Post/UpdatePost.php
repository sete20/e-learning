<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.post.edit', $this->post);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'author_id' => ['sometimes', 'string'],
            'category_id' => ['sometimes', 'string'],
            'tag_id' => ['sometimes', 'string'],
            'title' => ['sometimes', 'string'],
            'likes' => ['sometimes', 'numeric'],
            'image' => ['nullable', 'string'],
            'slug' => ['sometimes', Rule::unique('posts', 'slug')->ignore($this->post->getKey(), $this->post->getKeyName()), 'string'],
            'body' => ['sometimes', 'string'],
            'is_published' => ['sometimes', 'boolean'],
            'seo_description' => ['nullable', 'string'],
            'seo_keywords' => ['nullable', 'string'],
            'seo_title' => ['nullable', 'string'],
            
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
