<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string|url',
            'price' => 'required|integer|numeric',
            'serie' => 'string',
            'type' => 'string',
            'sale_date' => 'date'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo del fumetto é obbligatorio',
            'description.required' => 'La descrizione del fumetto é obbligatorio',
            'thumb.required' => "L'immagine di copertina del fumetto é obbligatoria",
            'thumb.url' => "L'immagine di copertina deve essere fornita tramite url",
            'price.required' => "Il prezzo del fumetto é obbligatorio",
            'sale_date.date' => "Inserire una data corretta",
        ];
    }
}
