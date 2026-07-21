<?php

namespace App\Http\Requests\Hardware;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 

class StoreGpuRequest extends FormRequest
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

            'manufacturer' => [
                'required',
                Rule::in([
                    'NVIDIA',
                    'AMD',
                    'Intel',
                ]),
            ],

            'model' => [
                'required',
                'string',
                'max:150',
                'unique:gpus,model',
            ],

            'vram' => [
                'nullable',
                'numeric',
                'min:1',
                'max:64',
            ],

            'score' => [
                'required',
                'integer',
                'min:1',
                'unique:gpus,score',
            ],

            'release_year' => [
                'nullable',
                'integer',
                'between:1990,' . (date('Y') + 1),
            ],

            'is_active' => [
                'required',
                'boolean',
            ],

        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [

            'manufacturer.required' => 'Please select a manufacturer.',

            'manufacturer.in' => 'The selected manufacturer is invalid.',

            'model.required' => 'GPU model is required.',

            'model.unique' => 'This GPU model already exists.',

            'score.required' => 'Benchmark score is required.',

            'score.unique' => 'This benchmark score already exists.',

            'vram.numeric' => 'VRAM must be a valid number.',

            'release_year.between' => 'Please enter a valid release year.',

        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([

            'manufacturer' => $this->manufacturer
                ? strtoupper($this->manufacturer) === 'NVIDIA'
                    ? 'NVIDIA'
                    : ucfirst(strtolower($this->manufacturer))
                : null,

            'is_active' => filter_var($this->is_active, FILTER_VALIDATE_BOOLEAN),

        ]);
    }
}