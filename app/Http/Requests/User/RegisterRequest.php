<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Passwords;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'fio' => 'required|string',
            'login'=>'required|string',
            'email'=>'required|string',
            'password'=>'required|string'
        ];
    }
}
