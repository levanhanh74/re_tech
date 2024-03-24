<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tb_category extends FormRequest
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
            'name' => "required|string|min:2|unique:tb_category,name,{$this->id}",
        ];
    }
    public function messages()
    {
        return [
            'required' => "You need enter attribute :attribute",
            'unique' => "Your :attribute already exist. Please try?",
            'min' => "The attribute :attribute enter min :min character!",
        ];
    }
}
