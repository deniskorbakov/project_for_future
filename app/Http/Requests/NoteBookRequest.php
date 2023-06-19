<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteBookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|string|min:15|max:50',
            'company' => 'nullable|string|min:2|max:50',
            'phone_number' => 'required|string|min:8|max:20',
            'email' => 'required|email|min:8',
            'date_of_birth' => 'nullable|date',
            'photo' => 'nullable|string|min:15',
        ];
    }
}
