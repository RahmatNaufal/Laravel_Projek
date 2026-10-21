<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAnggotaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|min:3', 
            'alamat' => 'required|min:3', 
            'tgl_lahir' => 'required|integer|min:0', 
        ];
    }
    public function messages(): array 
    { 
        return [ 
            'nama.required' => 'Nama wajib diisi.', 
            'nama.min' => 'Namau minimal 3 karakter.', 
            'alamat.required' => 'Alamat wajib diisi.', 
            'alamat.min' => 'Alamat minimal 3 karakter.', 
            'tgl_lahir.required' => 'Tanggal Lahir wajib diisi.', 
            'tgl_lahir.integer' => 'Tanggal Lahir harus berupa angka.', 
        ]; 
    }
}
