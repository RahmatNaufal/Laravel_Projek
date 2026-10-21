<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBukuRequest extends FormRequest
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
            'kode_buku' => 'required|min:3', 
            'judul' => 'required|min:3', 
            'stok' => 'required|integer|min:0', 
        ];
    }
    public function messages(): array 
    { 
        return [ 
            'kode_buku.required' => 'Kode buku wajib diisi.', 
            'kode_buku.min' => 'Kode buku minimal 3 karakter.', 
            'judul.required' => 'Judul wajib diisi.', 
            'judul.min' => 'Judul minimal 3 karakter.', 
            'stok.required' => 'Stok wajib diisi.', 
            'stok.integer' => 'Stok harus berupa angka.', 
            'stok.min' => 'Stok minimal 0.', 
        ]; 
    }
}
