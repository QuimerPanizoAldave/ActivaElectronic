<?php

namespace ActivaElectronic\Http\Requests;

use ActivaElectronic\Http\Requests\Request;

class CategoriaRequest extends Request
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
            'categoria'=>'min:3|required|unique:categorias'
        ];
    }
}
