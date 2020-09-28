<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required | cpf | unique:cliente,cpf_cliente',
            'data_nascimento' => 'required',
            'telefone' => 'required | min:10',
            'celular' => 'required | min:10',
        ];
    }

    public function messages(){

        return[
            'nome.required' => 'Informar o nome',
            'cpf.required' => 'Informar o CPF',
            'cpf.cpf' => 'CPF inválido',
            'cpf.unique' => 'CPF já existe',
            'celular.min' => 'Informar celular válido',
            'celular.required' => 'Informar celular',
            'telefone.required' => 'Informar telefone',
            'telefone.min' => 'Informar telefone válido',
        ];
    }
}
