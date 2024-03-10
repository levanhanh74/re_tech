<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tb_comment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'email' => "required|email|unique:email",
            'email' => "required|string|min:6",
            'comment' => "required|string|min:6",
        ];
    }
    function message()
    {
        return [
            'required' => "You need enter attribute :attribute",
            'unique' => "Your :attribute already exist. Please try?",
            'min' => "The attribute :attribute enter min :min character!",
        ];
    }
}
