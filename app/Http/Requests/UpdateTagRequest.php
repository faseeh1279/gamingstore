<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 

class UpdateTagRequest extends FormRequest
{
    /**
     * Determine if the user is authorized.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation Rules
     */
    public function rules(): array
    {
        $tag = $this->route('tag');

        return [

            'name' => [
                'required',
                'string',
                'max:100',
                Rule::unique('tags', 'name')->ignore($tag),
            ],

            'slug' => [
                'nullable',
                'string',
                'max:100',
                Rule::unique('tags', 'slug')->ignore($tag),
            ],

        ];
    }

    /**
     * Custom Messages
     */
    public function messages(): array
    {
        return [

            'name.required' => 'Tag name is required.',

            'name.unique' => 'This tag already exists.',

            'slug.unique' => 'This slug is already in use.',

        ];
    }
}