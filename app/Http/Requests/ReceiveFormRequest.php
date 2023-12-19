<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiveFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'noteNum' => 'required|numeric|digits:5',
            'sender' => 'required',
            'receiver' => 'required',
            'key' => 'required|numeric|digits:6',
        ];
    }
}
