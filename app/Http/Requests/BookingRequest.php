<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookingRequest extends FormRequest
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
            'fname' => ['required','string'],
            'lname' => ['required','string'],
            'email' => ['required','email'],
            'phone' => ['required','numeric'],
            'address' => ['required','string'],
            'date' => ['required','string'],
            'duration' => ['required','string'],
            'people' => ['required','numeric'],
            'comment' => ['required','string']
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'ok' => false,
            'message' => 'Failed Validation',
            'data' => null,
            'error' => $validator->errors(),
            'errors_all' => $validator->errors()->all()
        ],422));
    }
}
