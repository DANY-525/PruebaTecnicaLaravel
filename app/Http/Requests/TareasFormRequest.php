<?php

namespace AplicacionWeb\Http\Requests;

use AplicacionWeb\Http\Requests\Request;

class TareasFormRequest extends Request
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
            'ParentTask'=>'required|max:60',
            'DescripcionTask'=>'max:60',
            'AliasTask'=>'max:70',
            'InitialDateTask' =>'max:70',
            'FinalDateTask' =>'max:80',
            'FK_IdUsuario'=>'max:90',
            'FK_UserName' =>'max:90',
            'FK_IdProject' =>'max:90',
            'FK_NameProject' =>'max:90',
        ];
    }
}
