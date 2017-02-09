<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKontakRequest extends FormRequest
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
            'nama' => 'required|min:3|max:50|alpha',
            'email' => 'required|between:3,50|email|max:50',
            'phone' => 'required|numeric|max:18',
            'pesan' => 'required|between:5,2000|max:2000',
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'The Name field is required',
            'nama.max' => 'The Name may not be greater than 50 characters.',
            'nama.min' => 'The Name may not be lesser than 3 characters',
            'nama.alpha' => 'The Name may only contain letters',
            'phone.required' => 'The Phone field is required',
            'phone.max' => 'The Phone may not be greater than 18 characters.',
            'phone.numeric' => 'The Phone must be number',
            'email.required' => 'The Email field is required',
            'email.max' => 'The Email may not be greater than 50 characters.',
            'email.between' => 'The Email must between 3 - 51 characters',
            'email.email' => 'The Email must be a valid email address.',
            'pesan.required' => 'The Message field is required',
            'pesan.max' => 'The Messages may not be greater than 2000 characters.',
            'pesan.between' => 'The Messages must between 5 - 2001 characters',
        ];
    }
}
