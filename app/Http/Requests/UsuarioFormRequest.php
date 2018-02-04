<?php

namespace AplicacionWeb\Http\Requests;

use AplicacionWeb\Http\Requests\Request;

class UsuarioFormRequest extends Request
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
            'UserName'=>'required|max:60',
            'Email'=>'max:60',
            'Password'=>'max:70',
            'Avatar' =>'max:70',
            'Rol' =>'max:80',
          
        ];
    }
}
