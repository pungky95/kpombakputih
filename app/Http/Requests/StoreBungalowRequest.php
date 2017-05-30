<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBungalowRequest extends FormRequest
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
            'nama' => 'required|max:25|min:3',
            'tarif_high' => 'required',
            'tarif_low' => 'required',
            'keterangan' => 'required|max:2000|min:10',
            'fasilitas' => 'required',
            'jumlah_kamar' => 'required',
        ];
    }

     public function messages()
    {
        return [
            'nama.required' => 'The Name field is required',
            'nama.max' => 'The Name may not be greater than 25 characters.',
            'nama.min' => 'The Name may not be lesser than 3 characters',
            'tarif_low.required' => 'The Low Season Price field is required',
            'tarif_high.required' => 'The High Season Price field is required',
            'keterangan.required' => 'The Description field is required',
            'keterangan.max' => 'The Description may not be greater than 2000 characters',
            'keterangan.min' => 'The Description may not be lesser than 10 characters',
            'fasilitas.required' => 'The facilities field is required, at least choose min one',
            'jumlah_kamar.required' => 'The Rooms field is required', 
        ];
    }
}
