<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ['required','max:100'],
            'email' => ['required','email'],
            'project_type' => ['required'],
            'message' => ['required','min:10']
        ];
    }
    /**
     * Custom messages
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'name.max' => 'Name cannot exceed 100 characters.',
            'email.required' => 'Please enter your email.',
            'email.email' => 'Please enter a valid email address.',
            'project_type.required' => 'Please select a project type.',
            'message.required' => 'Please enter your message.',
            'message.min' => 'Message must be at least 10 characters.'
        ];
    }
}
