<?php

namespace App\Http\Requests\Hardware;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; 

class UpdateCpuRequest extends FormRequest
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
                    'Other',
                ]),
            ],

            'model' => [
                'required',
                'string',
                'max:150',
                Rule::unique('cpus', 'model')->ignore($this->cpu),
            ],

            'cores' => [
                'nullable',
                'integer',
                'min:1',
            ],

            'threads' => [
                'nullable',
                'integer',
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
                Rule::unique('cpus', 'score')->ignore($this->cpu),
            ],

            'is_active' => [
                'required',
                'boolean',
            ],

        ];
    }
}