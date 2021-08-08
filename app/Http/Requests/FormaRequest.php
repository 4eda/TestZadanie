<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormaRequest extends FormRequest
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
            'name' => 'required',
            'email'=>'required|email',
            'family'=> 'required',
            'Otch'=> 'required',
            'Phone' => 'required|regex:/(8)[0-9]{9}/',
            'Adres'=>'required'
            
        ];
    }
    public function messages(){ 
        return [
            'name.required' => 'Поле имя является обязязательным',
            'email.required' => 'Поле email является обязязательным',
            'family.required' => 'Поле фамилия  является обязязательным',
            'Otch.required' => 'Поле отчество является обязязательным',
            'Phone.required' => 'Поле номер является обязязательным',
            'Adres.required' => 'Поле адрес является обязязательным'
        ];

}
}
