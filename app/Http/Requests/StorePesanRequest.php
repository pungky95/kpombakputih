<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePesanRequest extends FormRequest
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
            'tgl_masuk' => 'required|date|after:yesterday|before:tgl_keluar',
            'tgl_keluar' => 'required|date|after:tgl_masuk',
            'adults' => 'required',
            'children' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'tgl_masuk.required' => 'The arrival date is required',
            'tgl_masuk.date' => 'The arrival date must be date',
            'tgl_masuk.after' => 'The arrival date must this day or later',
            'tgl_masuk.before' => 'The arrival date must be before departure date',
            'tgl_keluar.required' => 'The departure date is required',
            'tgl_keluar.date' => 'The departure date must be date',
            'tgl_keluar.after' => 'The departure date must be after arrival date',
            'adults.required' => 'The adults field is required',
        ];
    }
}
