<?php

namespace App\Http\Requests;

use App\Util\FormatNumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreLivroRequest extends FormRequest
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
            'Titulo' => 'required|string|max:40',
            'Editora' => 'required|string|max:40',
            'Edicao' => 'required|integer|min:1',
            'AnoPublicacao' => 'required|integer',
            'Valor' => 'required|numeric',
            'Autor.*' => 'required|integer',
            'Assunto.*' => 'required|integer',
        ];
    }


    public function prepareForValidation()
    {
        $this->merge([
            'Valor' => FormatNumber::formatDecimal($this->Valor),
        ]);
    }

    

}
