<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //se não houver necessidade de autenticação sempre deve estar true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' =>['required','string','min:3']
        ];
    }

    public function messages(){
        return[
            'required'=>"O campo :attribute deve ser preenchido",
            'min'=>"O campo :attribute deve ter no mínimo :min caractere(s)"
        ];
    }

    public function attributes(){
        return [
            'nome'
        ];
    }

}
