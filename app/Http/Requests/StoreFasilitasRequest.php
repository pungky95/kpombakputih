<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFasilitasRequest extends FormRequest
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
            'nama' => 'required|max:25|min:6',
            'keterangan' => 'required|max:1000|min:10',
        ];
    }

    public function messages(){
        return [
            'nama.required' => 'The name field is required',
            'nama.max' => 'The name may not be greater than 25 characters',
            'nama.min' => 'The name may not be lesser than 6 characters',
            'keterangan.required' => 'The description field is required',
            'keterangan.max' => 'The description may not be greater than 1000 characters',
            'keterangan.min' => 'The description may not be lesser than 6 characters',
        ];
    }
}
