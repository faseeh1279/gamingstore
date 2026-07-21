<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BulkStoreDocumentRequest extends FormRequest
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
            'titles' => 'required|array|min:1',

            'titles.*' => 'required|max:255',

            'descriptions' => 'nullable|array',

            'descriptions.*' => 'nullable',

            'files' => 'required|array|min:1',

            'files.*' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:3000',
        ];
    }
}
