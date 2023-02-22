<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSandwichRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            "name" => "required|string|max:150",
            "number_of_toppings" => "required|integer|min:1|max:9",
            "toppings" => "required|string",
            "vegetarian" => "required|boolean"
        ];
    }
}
