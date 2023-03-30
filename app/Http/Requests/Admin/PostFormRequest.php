<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'category_id' => [
                'required',
                'integer',
                'exists:categories,id',
            ],
            'name' => [
                'required',
                'string',
            ],
            'slug' => [
                'required',
                'string',
            ],
            'description' => [
                'required',
            ],
            'yt_iframe' => [
                'nullable',
                'string',
            ],
            'meta_title' => [
                'nullable',
                'string',
            ],
            'meta_description' => [
                'nullable',
                'string',
            ],
            'meta_keywords' => [
                'nullable',
                'string',
            ],
            'status' => [
                'nullable',
            ],
        ];
    }
}
