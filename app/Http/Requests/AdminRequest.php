<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        $rules = [
            'name'       => 'min:2',
            'email'      => 'required|email|unique:users',
            'password'   => 'confirmed|required|min:6',
        ];

        if (request()->isMethod('PUT') && empty(request()->get('password'))) {
            unset($rules['password']);
        }
        if (request()->isMethod('PUT')) {
            $rules['email'] =  'required|email|unique:users,email,' . request()->admin->id;
        }


        return $rules;
    }
}
