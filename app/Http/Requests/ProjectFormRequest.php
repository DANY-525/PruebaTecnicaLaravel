<?php

namespace AplicacionWeb\Http\Requests;

use AplicacionWeb\Http\Requests\Request;

class ProjectFormRequest extends Request
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
            'NameProject'=>'required|max:60',
            'DescriptionProject'=>'max:60',
            'AvatarProject'=>'max:70',
            'AliasProject' =>'max:70',
            'StatusProject' =>'max:80',
            'InitialDateProject'=>'max:90',
            'FinalDateProject' =>'max:90',
            'LeaderUser' =>'max:90',
        ];
    }
}
