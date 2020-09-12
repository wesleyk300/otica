<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaRequest extends FormRequest
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
            'odlonge' => 'required',
            'odesf' => 'required',
            'odcil' => 'required',
            'odeixo' => 'required',
            'oelonge' => 'required',
            'oeesf' => 'required',
            'oecil' => 'required',
            'oeeixo' => 'required',
        ];
    }

    public function messages(){

        return[
            'odlonge.required' => 'Informar OD Longe',
            'odesf.required' => 'Informar OD ESF',
            'odcil.required' => 'Informar OD CIL',
            'odeixo.required' => 'Informar OD Eixo',
            'oelonge.required' => 'Informar OE Longe',
            'oeesf.required' => 'Informar OE ESF',
            'oecil.required' => 'Informar OE CIL',
            'oeeixo.required' => 'Informar OE Eixo',
        ];
    }
}
