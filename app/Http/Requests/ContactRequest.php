<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // dd($this->route('contact'));
        // dd($this->method());
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'company_id ' => 'required|exists:companies,id',
            'first_name' => 'required',
            'last_name' => 'required',
            'person_title' => 'required',
            'person_address' => 'required',
            'person_email' => 'required|email',
            'person_phone' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'company_id ' => 'company',
            'person_title' => 'job title',
            'person_address' => 'address',
            'person_email' => 'email',
            'person_phone' => 'phone',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'person_title.required' => 'The job title field is required.',
    //         'person_address.required' => 'The address field is required.',
    //         'person_email.required' => 'The email field is required.',
    //         'person_email.email' => 'The email must be a valid email address.',
    //         'person_phone.required' => 'The phone field is required.',
    //     ];
    // }
}
