<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 
use Illuminate\Support\Str;

class UpdateCategoryRequest extends FormRequest
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
    protected function prepareForValidation(): void
    {
        $this->merge([

            'slug' => $this->slug
                ? Str::slug($this->slug)
                : Str::slug($this->name),

            'is_active' => $this->boolean('is_active'),

        ]);
    }

    /**
     * Validation rules.
     */
    public function rules(): array
    {
        return [

            'name' => [

                'required',
                'string',
                'max:100',

                Rule::unique('categories')
                    ->ignore($this->route('category')),

            ],

            'slug' => [

                'required',
                'string',
                'max:255',

                Rule::unique('categories')
                    ->ignore($this->route('category')),

            ],

            'icon' => [
                'nullable',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'is_active' => [
                'required',
                'boolean',
            ],

        ];
    }

    /**
     * Custom messages.
     */
    public function messages(): array
    {
        return [

            'name.required' => 'Category name is required.',

            'name.unique' => 'Category name already exists.',

            'slug.unique' => 'Slug already exists.',

        ];
    }
}