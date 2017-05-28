<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'txtFullName' => 'required',
            'txtNameYoutube' => 'required',
            'txtLink'  => 'required',
            'email' => 'required',
            'txtIntro' => 'required'

        ];
    }

     public function messages()
    {
        return [
            'txtFullName.required' => 'Chua nhap name',
            'txtNameYoutube.required' => 'Chua nhap video',
            'txtLink.required' => 'Chua nhap link video',
            'email.required' => 'Chua nhap email',
            'txtIntro.required' => 'Chua nhap noi dung',
            
        ];
    }
}
