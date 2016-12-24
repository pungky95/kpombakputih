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
            'nama' => 'required|max:50',
            'email' => 'required|max:50',
            'phone' => 'required|max:18',
            'pesan' => 'required|max:2000',
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'The Name field is required',
            'nama.max' => 'The Name may not be greater than 50 characters.',
            'phone.required' => 'The Phone field is required',
            'phone.max' => 'The Phone may not be greater than 18 characters.',
            'email.required' => 'The Email field is required',
            'email.max' => 'The Email may not be greater than 50 characters.',
            'pesan.required' => 'The Message field is required',
            'pesan.max' => 'The Messages may not be greater than 2000 characters.',
        ];
    }
}
