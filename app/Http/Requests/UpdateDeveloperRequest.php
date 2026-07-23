<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 
class UpdateDeveloperRequest extends FormRequest
{
     /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('developers', 'name')
                ->ignore($this->developer),
            ],

            'description' => [
                'nullable',
                'string'
            ],

            'website' => [
                'nullable',
                'url',
                'max:255'
            ],

            'founded_year' => [
                'nullable',
                'integer',
                'digits:4',
                'min:1900',
                'max:' . date('Y')
            ],

            'logo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],

            'is_active' => [
                'nullable',
                'boolean'
            ],

        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'Developer name is required.',
            'name.unique' => 'This developer already exists.',

            'slug.unique' => 'Developer slug already exists.',

            'website.url' => 'Please provide a valid website URL.',

            'logo.image' => 'The uploaded file must be an image.',
            'logo.max' => 'Logo size must not exceed 2MB.',
        ];
    }
}