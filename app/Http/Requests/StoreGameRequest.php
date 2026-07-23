<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
        return [

            /*
            |--------------------------------------------------------------------------
            | Game Information
            |--------------------------------------------------------------------------
            */

            'title' => [
                'required',
                'string',
                'max:255',
                'unique:games,title',
            ],

            'category_id' => [
                'required',
                'exists:categories,id',
            ],

            'developer_id' => [
                'required',
                'exists:developers,id',
            ],

            'publisher_id' => [
                'required',
                'exists:publishers,id',
            ],

            'platform_id' => [
                'required',
                'exists:platforms,id',
            ],

            'release_date' => [
                'nullable',
                'date',
            ],

            'official_website' => [
                'nullable',
                'url',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],

            /*
            |--------------------------------------------------------------------------
            | Images
            |--------------------------------------------------------------------------
            */

            'cover_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'banner_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],

            /*
            |--------------------------------------------------------------------------
            | Tags
            |--------------------------------------------------------------------------
            */

            'tags' => [
                'nullable',
                'array',
            ],

            'tags.*' => [
                'exists:tags,id',
            ],

            /*
            |--------------------------------------------------------------------------
            | Minimum Requirements
            |--------------------------------------------------------------------------
            */

            'minimum_cpu_id' => [
                'required',
                'exists:cpus,id',
            ],

            'minimum_gpu_id' => [
                'required',
                'exists:gpus,id',
            ],

            'minimum_ram' => [
                'required',
                'string',
                'max:50',
            ],

            'minimum_storage' => [
                'required',
                'string',
                'max:50',
            ],

            'minimum_os' => [
                'required',
                'string',
                'max:255',
            ],

            'minimum_directx' => [
                'required',
                'string',
                'max:100',
            ],

            /*
            |--------------------------------------------------------------------------
            | Recommended Requirements
            |--------------------------------------------------------------------------
            */

            'recommended_cpu_id' => [
                'required',
                'exists:cpus,id',
            ],

            'recommended_gpu_id' => [
                'required',
                'exists:gpus,id',
            ],

            'recommended_ram' => [
                'required',
                'string',
                'max:50',
            ],

            'recommended_storage' => [
                'required',
                'string',
                'max:50',
            ],

            'recommended_os' => [
                'required',
                'string',
                'max:255',
            ],

            'recommended_directx' => [
                'required',
                'string',
                'max:100',
            ],

        ];
    }

    /**
     * Custom Messages
     */
    public function messages(): array
    {
        return [

            'title.required' => 'Game title is required.',

            'title.unique' => 'This game already exists.',

            'category_id.required' => 'Please select a category.',

            'developer_id.required' => 'Please select a developer.',

            'publisher_id.required' => 'Please select a publisher.',

            'platform_id.required' => 'Please select a platform.',

            'cover_image.image' => 'Cover image must be an image.',

            'banner_image.image' => 'Banner image must be an image.',

            'official_website.url' => 'Please enter a valid website URL.',

        ];
    }
}