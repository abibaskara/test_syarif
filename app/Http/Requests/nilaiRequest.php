<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class nilaiRequest extends FormRequest
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
            'id_mahasiswa' => 'required|integer',
            'id_matkul' => 'required|integer',
            'nilai' => 'required',
        ];
    }
}