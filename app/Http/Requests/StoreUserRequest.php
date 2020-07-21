<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'marca' => 'required',
            'modelo' => 'required | unique:produto,modelo_produto',
            'cor' => 'required',
            'referencia' => 'required',
            'quantidade' => 'required',
            'entrada' => 'required',
            'saida' => 'required',
        ];
    }

    public function messages(){

        return[
            'marca.required' => 'Selecionar a marca',
            'modelo.required' => 'Informar o modelo',
            'modelo.unique' => 'Modelo já cadastrado',
            'cor.required' => 'Informar a cor',
            'referencia.required' => 'Informar a referência',
            'quantidade.required' => 'Informar a quantidade',
            'entrada.required' => 'Informar valor de entrada',
            'saida.required' => 'Informar valor de saída',
        ];
    }
}
