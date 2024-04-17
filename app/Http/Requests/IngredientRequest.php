<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientRequest extends FormRequest
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
     *..
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom'=>'required|min:5|max:50|regex:/^[^.,;]+$/',
            'categorie'=> 'required',
            'calorie'=>'required|numeric|min:1',
            'prix'=>'required|numeric|min:1'
        ];
    }
}
