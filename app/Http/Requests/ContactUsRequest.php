<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'message'=>'required|min:10',
            'email'=>'required|email',
            'name'=>'required'
        ];
    }

    //customised error messages
    public function messages()
    {
        return [
            'name.required' => 'subject is required',
            'email.required'  => 'A valid email is required',
            'message' => 'The message must have a minimum of atleast 10 characters'
        ];
    }
}
