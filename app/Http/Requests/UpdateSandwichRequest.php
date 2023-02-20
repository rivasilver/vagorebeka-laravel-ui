<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSandwichRequest extends FormRequest
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
        $number_of_toppings = "number_of_toppings";
        return [
            "name" => "string|max:150",
            "number_of_toppings" => "integer|min:1|max:9",
            "toppings" => "text|size:$number_of_toppings",
            "vegetarian" => "boolean"
        ];
    }
}
