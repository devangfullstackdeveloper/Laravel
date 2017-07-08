<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
            'name' => 'required|max:32',
            'gender' => 'required|in:Male,Female',
            'address' => 'required|max:32',
            'phone' => 'required|numeric|digits:10',
            'terms' => 'required',
        ];
    }
}
