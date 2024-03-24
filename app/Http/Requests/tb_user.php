<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tb_user extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => "required|string|max:255",
            'email' => "required|email|unique:tb_users,email,{$this->id}",
            'password' => "required|string|min:6",
        ];
    }
    public function messages()
    {
        return [
            'required' => "You need enter attribute :attribute",
            'unique' => "Your email already exist. Please try?",
            'min' => "The attribute :attribute enter min :min character!",
        ];
    }
}
