<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSandwichRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $number_of_toppings = "number_of_toppings";
        return [
            "name" => "required|string|max:150",
            "number_of_toppings" => "required|integer|min:1|max:9",
            "toppings" => "required|text|size:$number_of_toppings",
            "vegetarian" => "required|boolean"
        ];
    }
}
