<?php

namespace AplicacionWeb\Http\Requests;

use AplicacionWeb\Http\Requests\Request;

class ComentariosFormRequest extends Request
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
            'TitleComment'=>'required|max:60',
            'Tags'=>'max:60',
            'FK_Idtask'=>'max:70',
            'FK_IdUsuario' =>'max:70',
            'FK_UserName' =>'max:80',
          
        ];
    }
}
