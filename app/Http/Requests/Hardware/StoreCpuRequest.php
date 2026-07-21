<?php

namespace App\Http\Requests\Hardware;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 

class StoreCpuRequest extends FormRequest
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
                    'Intel',
                    'AMD',
                    'Apple',
                    'Qualcomm',
                    'Other'
                ]),
            ],

            'model' => [
                'required',
                'string',
                'max:150',
                'unique:cpus,model',
            ],

            'cores' => [
                'nullable',
                'integer',
                'min:1',
            ],

            'threads' => [
                'nullable',
                'integer',
                'min:1',
                'gte:cores',
            ],

            'base_clock' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'boost_clock' => [
                'nullable',
                'numeric',
                'gte:base_clock',
            ],

            'release_year' => [
                'nullable',
                'integer',
                'between:1970,' . (date('Y') + 1),
            ],

            'score' => [
                'required',
                'integer',
                'min:1',
                'unique:cpus,score',
            ],

            'is_active' => [
                'required',
                'boolean',
            ],

        ];
    }

    public function messages(): array
    {
        return [

            'manufacturer.required' => 'Please select a manufacturer.',

            'manufacturer.in' => 'The selected manufacturer is invalid.',

            'model.required' => 'CPU model is required.',

            'model.unique' => 'This CPU already exists.',

            'threads.gte' => 'Threads must be greater than or equal to cores.',

            'boost_clock.gte' => 'Boost clock cannot be less than base clock.',

            'score.unique' => 'Benchmark score already exists.',

        ];
    }

     public function attributes(): array
    {
        return [

            'manufacturer' => 'Manufacturer',

            'model' => 'CPU Model',

            'cores' => 'Cores',

            'threads' => 'Threads',

            'base_clock' => 'Base Clock',

            'boost_clock' => 'Boost Clock',

            'release_year' => 'Release Year',

            'score' => 'Benchmark Score',

            'is_active' => 'Status',

        ];
    }
}