<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tb_product extends FormRequest
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
            'name' => "required|string|min:6|unique",
            'price' => "required|numeric",
            'warranty' => "required|string|min:2",
            'image' => "required|string:min:2",
            'accessories' => "required|string|min:2",
            'condition' => "required|string|min:2",
            'status' => "required|numeric",
            'promotion' => "required|string|min:1",
            'description' => "required|string|min:5",
            'feature' => "required|numeric|",
            'id_category' => "required",
        ];
    }
    public function message()
    {
        return [
            'required' => "You need enter attribute :attribute",
            'unique' => "Your :attribute already exist. Please try?",
            'min' => "The attribute :attribute enter min :min character!",
            'numeric' => "You have enter number this attribute!",
        ];
    }
}
