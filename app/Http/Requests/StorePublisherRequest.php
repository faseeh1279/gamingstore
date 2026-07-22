<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 

class StorePublisherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'name' => [
                'required',
                'string',
                'max:100',
                Rule::unique('publishers', 'name'),
            ],

            'website' => [
                'nullable',
                'url',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'logo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],

        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => 'Publisher name is required.',
            'name.unique' => 'This publisher already exists.',

            'website.url' => 'Please enter a valid website URL.',

            'logo.image' => 'The uploaded file must be an image.',
            'logo.max' => 'Logo must not exceed 2MB.',

        ];
    }
}