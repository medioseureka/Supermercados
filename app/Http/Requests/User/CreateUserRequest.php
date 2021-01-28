<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name'       => 'required|string|min:3',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|confirmed|min:6',
            'phone'      => 'required|string',
            'address'    => 'string',
            'company_id' => 'integer|required|exists:companies,id',
            'role_id'    => 'integer|required|exists:roles,id',
        ];
    }
}
