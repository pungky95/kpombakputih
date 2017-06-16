<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimoniRequest extends FormRequest
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
            'nama_tamu' => 'required',
            'konten' => ' required',
        ];
    }
    public function messages()
    {
        return [
            'nama_tamu.required' => 'The name is required',
            'konten.required' => 'The testimoni is required',
        ];
    }
}
