<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasangRequest extends FormRequest
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
            'no_inet' => 'required|max:225',
            'nama_pelanggan' => 'required|max:225',
            'paket' => 'required|max:225',
            'alamat' => 'required|max:225',
            'telp' => 'required|max:225'
        ];
    }
}
