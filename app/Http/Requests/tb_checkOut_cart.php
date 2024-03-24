<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tb_checkOut_cart extends FormRequest
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
            'email' => "required|email",
            // 'phone' => "required|numeric|min:10",
            // 'address' => "required|string|min:6",
            // 'status' => "required|string|min:1",
            // 'name_product' => "required|string|min:6",
            // 'price_product' => "required|numeric",
            // 'quality_product' => "required|numeric|min:1",
            // 'image_product' => "required|string|min:6",
            // 'total_product' => "required|numeric",
            // 'item_array' => "required|string",
        ];
    }
    function messages()
    {
        return [
            'required' => "You need enter attribute :attribute",
            'unique' => "Your :attribute already exist. Please try?",
            'min' => "The attribute :attribute enter min :min character!",
            'numeric' => "You have enter number this attribute!",
        ];
    }
}
