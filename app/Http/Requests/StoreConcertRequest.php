<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConcertRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_konser' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric|min:0',
            'waktu' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'nama_artis' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto_konser' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'tanggal_awal' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_awal',
        ];
    }
}
