<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'nama' => 'required|max:100|min:3',
            'image' => 'required',
            'kategori' => 'required',
            'konten' => 'required|max:5000|min:10',
        ];
    }
     public function messages()
    {
        return [
            'nama.required' => 'The Title field is required',
            'nama.max' => 'The Title may not be greater than 100 characters.',
            'nama.min' => 'The Title may not be lesser than 3 characters',
            'image.required' => 'Image is required',
            'kategori.required' => 'The Category field is required',
            'konten.required' => 'The Content field is required',
            'konten.max' => 'The Content field may not be greater than 5000 characters',
            'konten.min' => 'The Content field may not be lesser than 10 characters',
        ];
    }
}
