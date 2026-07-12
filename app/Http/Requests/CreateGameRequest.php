<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class CreateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Return true if anyone can make this request.
        // Add authorization logic here if needed.
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
            'name' => ['required', 'string', 'max:255', 'unique:games,name'],
            'genre' => ['required', 'string', 'max:100'],
            'publisher' => ['required', 'string', 'max:255'],
            'release_date' => ['required', 'date'],
            // 'storage' => ['required', 'int'], 
            // 'ram' => ['required', 'int'], 
            // 'gpu' => ['required', 'string']
            // 'user_id' => ['required', 'exists:users,id'],
        ];
    }

    public function messages(): array { 
        return [ 
            'name.required' => 'Please enter the game name.',
            'name.unique' => 'A game with this name already exists.',

            'genre.required' => 'Please enter the game genre.',

            'publisher.required' => 'Please enter the publisher.',

            'release_date.required' => 'Please select a release date.',
            'release_date.date' => 'The release date must be a valid date.',

            // 'user_id.required' => 'A user is required.',
            // 'user_id.exists' => 'The selected user does not exist.',
        ];
    }

    public function attributes() : array 
    {
        return [ 
            'release_date' => 'release date',
            'user_id' => 'user', 
        ];
    }
}
