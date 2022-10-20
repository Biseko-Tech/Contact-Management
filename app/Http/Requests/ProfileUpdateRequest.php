<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string',],
            'bio' => ['nullable', 'string',],
            'profile_pic' => ['nullable', 'mimes:jpeg,bmp,png'],
        ];
    }

    public function handleRequest()
    {
        $profileData = $this->validated();
        $profile = $this->user();
        if ($this->hasFile('profile_pic')) {
            $picture = $this->profile_pic;
            $fileName = "profile-picture-{$profile->id}." . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploads'), $fileName);
            $profileData['profile_pic'] = $fileName;
        }
        return $profileData;
    }
}
