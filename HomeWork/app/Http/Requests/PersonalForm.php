<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalForm extends FormRequest
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
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];
    }
    public function messages(){
        return [
            'name.string' => 'Please fill in your name here...',
            'age.numeric' => 'Please enter your age...',
            'date.string' => 'Please enter your date of birth...',
            'phone.numeric' => 'Please check if it is correct...',
            'web.string' => 'Please re-enter and verify the characters...',
            'address.string' => 'Please enter your address...'
        ];
    }
}
